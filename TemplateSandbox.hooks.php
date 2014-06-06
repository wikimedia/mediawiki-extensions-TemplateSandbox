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
		$editpage->templatesandbox_template = $request->getText(
			'wpTemplateSandboxTemplate', $editpage->getTitle()->getFullText()
		);
		$editpage->templatesandbox_page = $request->getText( 'wpTemplateSandboxPage' );

		if ( $request->wasPosted() ) {

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

		if ( empty( $editpage->templatesandbox_preview ) ) {
			wfProfileOut( __METHOD__ );
			return true;
		}

		if ( $editpage->templatesandbox_template === '' || $editpage->templatesandbox_template === null ) {
			$out = TemplateSandboxHooks::wrapErrorMsg( 'templatesandbox-editform-need-template' );
			wfProfileOut( __METHOD__ );
			return false;
		}
		if ( $editpage->templatesandbox_page === '' || $editpage->templatesandbox_page === null ) {
			$out = TemplateSandboxHooks::wrapErrorMsg( 'templatesandbox-editform-need-title' );
			wfProfileOut( __METHOD__ );
			return false;
		}

		$templatetitle = Title::newFromText( $editpage->templatesandbox_template );
		if ( !$templatetitle instanceof Title ) {
			$out = TemplateSandboxHooks::wrapErrorMsg( 'templatesandbox-editform-invalid-template' );
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
		$parserOutput = null;

		try {
			TemplateSandboxHooks::$template = $templatetitle->getFullText();
			if ( $editpage->sectiontitle !== '' ) {
				$sectionTitle = $editpage->sectiontitle;
			} else {
				$sectionTitle = $editpage->summary;
			}

			if ( $editpage->getArticle()->exists() ) {
				TemplateSandboxHooks::$content = $editpage->getArticle()->replaceSectionContent(
					$editpage->section, $content, $sectionTitle, $editpage->edittime
				);
			} else {
				if ( $editpage->section === 'new' ) {
					$content = $content->addSectionHeader( $sectionTitle );
				}
				TemplateSandboxHooks::$content = $content;
			}

			// Apply PST to the to-be-saved text
			$popts = $editpage->getArticle()->makeParserOptions(
				$editpage->getArticle()->getContext()
			);
			$popts->setEditSection( false );
			$popts->setIsPreview( true );
			$popts->setIsSectionPreview( false );
			TemplateSandboxHooks::$content = TemplateSandboxHooks::$content->preSaveTransform(
				$templatetitle, $wgUser, $popts
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
			$parserOutput = $content->getParserOutput( $title, $rev->getId(), $popts );
			$wgOut->addParserOutputNoText( $parserOutput );

			$dtitle = $parserOutput->getDisplayTitle();
			$parserOutput->setTitleText( '' );
			$out = $parserOutput->getText();

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

		$pageLang = $title->getPageLanguage();
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
		global $wgUser;

		// Note that Parser::statelessFetchTemplate currently only handles one
		// level of redirection, regardless of $wgMaxRedirects. We reproduce
		// this behavior here.
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
			$finalTitle = $title;
			if ( $rtitle ) {
				$deps[] = array(
					'title' => $rtitle,
					'page_id' => $rtitle->getArticleID(),
					'rev_id' => 0,
				);
				$finalTitle = $rtitle;
			}

			$content = TemplateSandboxHooks::$content;
			if ( !$rtitle && $content->isRedirect() ) {
				$newTitle = $content->getRedirectTarget();
				$rev = Revision::newFromTitle( $newTitle );
				if ( $rev ) {
					$content = $rev->getContent( Revision::FOR_THIS_USER, $wgUser );
					$finalTitle = $newTitle;
				}
				$deps[] = array(
					'title' => $newTitle,
					'page_id' => $newTitle->getArticleID(),
					'rev_id' => 0,
				);
			}
			$text = $content->getWikitextForTransclusion();
			if ( $text === null ) {
				$text = false;
			}
			return array(
				'text' => $text,
				'finalTitle' => $finalTitle,
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
			// output the values in hidden fields so that a user
			// using a gadget doesn't have to re-enter them every time

			$html = Xml::openElement( 'span', array( 'id' => 'templatesandbox-editform' ) );

			$html .= Html::hidden( 'wpTemplateSandboxTemplate',
				$editpage->templatesandbox_template, array( 'id' => 'wpTemplateSandboxTemplate' )
			);

			$html .= Html::hidden( 'wpTemplateSandboxPage',
				$editpage->templatesandbox_page, array( 'id' => 'wpTemplateSandboxPage' )
			);

			$html .= Xml::closeElement( 'span' );

			$output->addHtml( $html . "\n" );

			return true;
		}

		// output the full form
		$html = '';

		$inputAttrs = array(
			'id' => 'wpTemplateSandboxPage',
			'tabindex' => ++$tabindex,
			'size' => 60,
			'spellcheck' => 'true',
		);

		$text = wfMessage( 'templatesandbox-editform-text' );
		if ( !$text->isDisabled() ) {
			$textAttrs = array(
				'class' => 'mw-templatesandbox-editform-text',
			);
			$html .= Xml::tags( 'div', $textAttrs, $text->parse() ) . "\n";
		}

		$html .= Html::hidden( 'wpTemplateSandboxTemplate',
			$editpage->templatesandbox_template, array( 'id' => 'wpTemplateSandboxTemplate' )
		);

		$labelText = wfMessage( 'templatesandbox-editform-page-label' );
		if ( !$labelText->isDisabled() ) {
			$spanLabelAttrs = array(
				'class' => 'mw-templatesandbox-page',
				'id' => "wpTemplateSandboxPageLabel"
			);
			$label = Xml::tags( 'label', array( 'for' => $inputAttrs['id'] ), $labelText->parse() );
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

		$helptext = wfMessage( 'templatesandbox-editform-helptext' );
		if ( !$helptext->isDisabled() ) {
			$helptextAttrs = array(
				'class' => 'mw-templatesandbox-editform-helptext',
			);
			$html .= ' ' . Xml::tags( 'span', $helptextAttrs, $helptext->parse() );
		}

		// Make fieldset
		$fieldSet = Xml::openElement( 'fieldset', array( 'id' => 'templatesandbox-editform' ) );
		$fieldSet .= Html::rawElement( 'legend', null,
			wfMessage( 'templatesandbox-editform-legend' )->parse() );
		$fieldSet .= $html . Xml::closeElement( 'fieldset' );

		$output->addHtml( $fieldSet . "\n" );
		$output->addModules( 'ext.TemplateSandbox' );

		return true;
	}
}
