<?php
class TemplateSandboxHooks {
	private static $template = null;

	/**
	 * @var Content
	 */
	private static $content = null;

	/**
	 * @var callback
	 */
	private static $oldTemplateCallback = null;

	/**
	 * Hook for EditPage::importFormData to parse our new form fields, and if
	 * necessary put $editpage into "preview" mode.
	 *
	 * Note we specifically do not check $wgTemplateSandboxEditNamespaces here,
	 * to allow users to create gadgets to enable this for other namespaces.
	 *
	 * @param $editpage EditPage
	 * @param $request WebRequest
	 * @return bool
	 */
	public static function importFormData( $editpage, $request ) {
		if ( $request->wasPosted() ) {
			$editpage->templatesandbox_page = $request->getText( 'wpTemplateSandboxPage' );

			if ( $request->getCheck( 'wpTemplateSandboxPreview' ) ) {
				$editpage->templatesandbox_preview = true;
				$editpage->preview = true;
				$editpage->save = false;
				$editpage->live = false;
			}
		}

		return true;
	}

	/**
	 * @param $msg string
	 * @return string
	 */
	private static function wrapErrorMsg( $msg ) {
		return "<div id='mw-$msg'>\n"
			. wfMessage( $msg )->parseAsBlock()
			. "\n</div>";
	}

	/**
	 * Hook for AlternateEditPreview to output an entirely different preview
	 * when our button was clicked.
	 *
	 * @param $editpage EditPage
	 * @param $content Content
	 * @param $out OutputPage
	 * @param $parserOutput ParserOutput
	 * @return bool
	 */
	public static function templateSandboxPreview( $editpage, &$content, &$out, &$parserOutput ) {
		global $wgOut, $wgUser, $wgLang;

		wfProfileIn( __METHOD__ );

		if ( !$editpage->templatesandbox_preview ) {
			wfProfileOut( __METHOD__ );
			return true;
		}

		if ( $editpage->templatesandbox_page === '' || $editpage->templatesandbox_page === null ) {
			$out = TemplateSandboxHooks::wrapErrorMsg( 'templatesandbox-editform-need-title' );
			wfProfileOut( __METHOD__ );
			return false;
		}

		$title = Title::newFromText( $editpage->templatesandbox_page );
		if ( !$title instanceof Title ) {
			$out = TemplateSandboxHooks::wrapErrorMsg( 'templatesandbox-editform-invalid-title' );
			wfProfileOut( __METHOD__ );
			return false;
		}
		if ( !$title->exists() ) {
			$out = TemplateSandboxHooks::wrapErrorMsg( 'templatesandbox-editform-title-not-exists' );
			wfProfileOut( __METHOD__ );
			return false;
		}

		$note = '';
		$dtitle = false;

		try {
			TemplateSandboxHooks::$template = $editpage->getTitle()->getFullText();
			if ( $editpage->sectiontitle !== '' ) {
				$sectionTitle = $editpage->sectiontitle;
			} else {
				$sectionTitle = $editpage->summary;
			}
			TemplateSandboxHooks::$content = $editpage->getArticle()->replaceSectionContent(
				$editpage->section, $content, $sectionTitle, $editpage->edittime
			);

			$note = wfMessage( 'templatesandbox-previewnote', $title->getFullText() )->plain() .
				' [[#' . EditPage::EDITFORM_ID . '|' . $wgLang->getArrow() . ' ' .
				wfMessage( 'continue-editing' )->text() . ']]';

			$page = WikiPage::factory( $title );
			$popts = $page->makeParserOptions( $editpage->getArticle()->getContext() );
			$popts->setEditSection( false );
			$popts->setIsPreview( true );
			$popts->setIsSectionPreview( false );
			TemplateSandboxHooks::$oldTemplateCallback = $popts->setTemplateCallback(
				'TemplateSandboxHooks::templateCallback'
			);
			$popts->enableLimitReport();

			$rev = Revision::newFromTitle( $title );
			$content = $rev->getContent( Revision::FOR_THIS_USER, $wgUser );
			$content = $content->preSaveTransform( $editpage->mTitle, $wgUser, $popts );
			$parserOutput = $content->getParserOutput( $title, $rev->getId(), $popts );
			$out = $parserOutput->getText();
			$wgOut->addParserOutputNoText( $parserOutput );

			$dtitle = $parserOutput->getDisplayTitle();
			$parserOutput->setTitleText( '' );

			if ( count( $parserOutput->getWarnings() ) ) {
				$note .= "\n\n" . implode( "\n\n", $parserOutput->getWarnings() );
			}
		} catch ( MWContentSerializationException $ex ) {
			$m = wfMessage( 'content-failed-to-parse',
				$editpage->contentModel, $editpage->contentFormat, $ex->getMessage()
			);
			$note .= "\n\n" . $m->parse();
			$out = '';
		}

		$dtitle = $dtitle === false ? $title->getFullText() : $dtitle;
		$previewhead = "<div class='previewnote'>\n" . '<h2 id="mw-previewheader">' .
			wfMessage( 'templatesandbox-preview', $title->getFullText(), $dtitle )->parse() . "</h2>" .
			$wgOut->parse( $note, true, /* interface */true ) . "<hr /></div>\n";

		$pageLang = $editpage->mTitle->getPageLanguage();
		$attribs = array( 'lang' => $pageLang->getCode(), 'dir' => $pageLang->getDir(),
			'class' => 'mw-content-' . $pageLang->getDir() );
		$out = Html::rawElement( 'div', $attribs, $out );

		$out = $previewhead . $out . $editpage->previewTextAfterContent;

		wfProfileOut( __METHOD__ );
		return false;
	}

	/**
	 * @param $title Title
	 * @param $parser Parser|bool
	 * @return array|mixed
	 */
	static function templateCallback( $title, $parser = false ) {
		$match = ( $title->getFullText() == TemplateSandboxHooks::$template );
		$rtitle = null;
		if ( !$match && $title->isRedirect() ) {
			$rtitle = WikiPage::factory( $title )->getRedirectTarget();
			$match = ( $rtitle->getFullText() == TemplateSandboxHooks::$template );
		}
		if ( $match ) {
			$deps[] = array(
				'title' => $title,
				'page_id' => $title->getArticleID(),
				'rev_id' => 0,
			);
			if ( $rtitle ) {
				$deps[] = array(
					'title' => $rtitle,
					'page_id' => $rtitle->getArticleID(),
					'rev_id' => 0,
				);
			}
			$text = TemplateSandboxHooks::$content->getWikitextForTransclusion();
			if ( $text === null ) {
				$text = false;
			}
			return array(
				'text' => $text,
				'finalTitle' => $rtitle ? $rtitle : $title,
				'deps' => $deps,
			);
		}
		return call_user_func( TemplateSandboxHooks::$oldTemplateCallback, $title, $parser );
	}

	/**
	 * Hook for EditPage::showStandardInputs:options to add our form fields to
	 * the "editOptions" area of the page.
	 *
	 * @param $editpage EditPage
	 * @param $output OutputPage
	 * @param $tabindex
	 * @return bool
	 */
	public static function injectOptions( $editpage, $output, &$tabindex ) {
		global $wgTemplateSandboxEditNamespaces;

		if ( !in_array( $editpage->getTitle()->getNamespace(), $wgTemplateSandboxEditNamespaces ) ) {
			return true;
		}

		$html = '';

		$inputAttrs = array(
			'id' => 'wpTemplateSandboxPage',
			'tabindex' => ++$tabindex,
			'size' => 60,
			'spellcheck' => 'true',
		);

		$labelText = wfMessage( 'templatesandbox-editform-page-label' )->parse();
		if ( $labelText ) {
			$spanLabelAttrs = array(
				'class' => 'mw-templatesandbox-page',
				'id' => "wpTemplateSandboxPageLabel"
			);

			$label = Xml::tags( 'label', array( 'for' => $inputAttrs['id'] ), $labelText );
			$label = Xml::tags( 'span', $spanLabelAttrs, $label );
			$html .= $label . " ";
		}

		$html .= Html::input( 'wpTemplateSandboxPage',
			$editpage->templatesandbox_page, 'text', $inputAttrs
		);

		$attrs = array(
			'id' => 'wpTemplateSandboxPreview',
			'name' => 'wpTemplateSandboxPreview',
			'type' => 'submit',
			'tabindex' => ++$tabindex,
			'value' => wfMessage( 'templatesandbox-editform-view-label' )->text(),
		);
		$html .= Xml::element( 'input', $attrs, '' );

		$html = Xml::fieldset(
			wfMessage( 'templatesandbox-editform-legend' )->text(),
			$html, array( 'id' => 'templatesandbox-editform' )
		);
		$output->addHtml( $html . "\n" );

		return true;
	}
}
