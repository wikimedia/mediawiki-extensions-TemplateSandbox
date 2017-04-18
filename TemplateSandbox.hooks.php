<?php
class TemplateSandboxHooks {
	/**
	 * Hook for EditPage::importFormData to parse our new form fields, and if
	 * necessary put $editpage into "preview" mode.
	 *
	 * Note we specifically do not check $wgTemplateSandboxEditNamespaces here,
	 * since users can manually enable this for other namespaces.
	 *
	 * @param EditPage $editpage
	 * @param WebRequest $request
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
	 * @param IContextSource $context
	 * @param string $msg
	 * @return string
	 */
	private static function wrapErrorMsg( IContextSource $context, $msg ) {
		return "<div id='mw-$msg'>\n"
			. $context->msg( $msg )->parseAsBlock()
			. "\n</div>";
	}

	/**
	 * Hook for AlternateEditPreview to output an entirely different preview
	 * when our button was clicked.
	 *
	 * @param EditPage $editpage
	 * @param Content $content
	 * @param string $out
	 * @param ParserOutput $parserOutput
	 * @return bool
	 */
	public static function templateSandboxPreview( EditPage $editpage, &$content, &$out,
		&$parserOutput
	) {
		if ( empty( $editpage->templatesandbox_preview ) ) {
			return true;
		}

		$context = $editpage->getContext();

		if ( $editpage->templatesandbox_template === '' ||
			$editpage->templatesandbox_template === null
		) {
			$out = self::wrapErrorMsg( $context, 'templatesandbox-editform-need-template' );
			return false;
		}
		if ( $editpage->templatesandbox_page === '' || $editpage->templatesandbox_page === null ) {
			$out = self::wrapErrorMsg( $context, 'templatesandbox-editform-need-title' );
			return false;
		}

		$templatetitle = Title::newFromText( $editpage->templatesandbox_template );
		if ( !$templatetitle instanceof Title ) {
			$out = self::wrapErrorMsg( $context, 'templatesandbox-editform-invalid-template' );
			return false;
		}

		$title = Title::newFromText( $editpage->templatesandbox_page );
		if ( !$title instanceof Title ) {
			$out = self::wrapErrorMsg( $context, 'templatesandbox-editform-invalid-title' );
			return false;
		}

		// If we're previewing the same page we're editing, we don't need to check whether
		// we exist, since we fake that we exist later. This is useful to, for example,
		// preview a page move.
		if ( !$title->equals( $templatetitle ) && !$title->exists() ) {
			$out = self::wrapErrorMsg( $context, 'templatesandbox-editform-title-not-exists' );
			return false;
		}

		$note = '';
		$dtitle = false;
		$parserOutput = null;

		$user = $context->getUser();
		$output = $context->getOutput();
		$lang = $context->getLanguage();

		try {
			if ( $editpage->sectiontitle !== '' ) {
				$sectionTitle = $editpage->sectiontitle;
			} else {
				$sectionTitle = $editpage->summary;
			}

			if ( $editpage->getArticle()->exists() ) {
				$content = $editpage->getArticle()->replaceSectionContent(
					$editpage->section, $content, $sectionTitle, $editpage->edittime
				);
			} else {
				if ( $editpage->section === 'new' ) {
					$content = $content->addSectionHeader( $sectionTitle );
				}
			}

			// Apply PST to the to-be-saved text
			$popts = $editpage->getArticle()->makeParserOptions(
				$context
			);
			$popts->setEditSection( false );
			$popts->setIsPreview( true );
			$popts->setIsSectionPreview( false );
			$content = $content->preSaveTransform(
				$templatetitle, $user, $popts
			);

			$note = $context->msg( 'templatesandbox-previewnote', $title->getFullText() )->plain() .
				' [[#' . EditPage::EDITFORM_ID . '|' . $lang->getArrow() . ' ' .
				$context->msg( 'continue-editing' )->text() . ']]';

			$page = WikiPage::factory( $title );
			$popts = $page->makeParserOptions( $context );
			$popts->setEditSection( false );
			$popts->setIsPreview( true );
			$popts->setIsSectionPreview( false );
			$logic = new TemplateSandboxLogic( [], $templatetitle, $content );
			$reset = $logic->setupForParse( $popts );
			$popts->enableLimitReport();

			$rev = call_user_func_array( $popts->getCurrentRevisionCallback(), [ $title ] );
			$content = $rev->getContent( Revision::FOR_THIS_USER, $user );
			$parserOutput = $content->getParserOutput( $title, $rev->getId(), $popts );

			$output->addParserOutputMetadata( $parserOutput );

			$dtitle = $parserOutput->getDisplayTitle();
			$parserOutput->setTitleText( '' );
			$out = $parserOutput->getText();

			if ( count( $parserOutput->getWarnings() ) ) {
				$note .= "\n\n" . implode( "\n\n", $parserOutput->getWarnings() );
			}
		} catch ( MWContentSerializationException $ex ) {
			$m = $context->msg( 'content-failed-to-parse',
				$editpage->contentModel, $editpage->contentFormat, $ex->getMessage()
			);
			$note .= "\n\n" . $m->parse();
			$out = '';
		}

		$dtitle = $dtitle === false ? $title->getFullText() : $dtitle;
		$previewhead = "<div class='previewnote'>\n" . '<h2 id="mw-previewheader">' .
			$context->msg( 'templatesandbox-preview', $title->getFullText(), $dtitle )->parse() . "</h2>" .
			$output->parse( $note, true, /* interface */true ) . "<hr /></div>\n";

		$pageLang = $title->getPageViewLanguage();
		$attribs = [ 'lang' => $pageLang->getHtmlCode(), 'dir' => $pageLang->getDir(),
			'class' => 'mw-content-' . $pageLang->getDir() ];
		$out = Html::rawElement( 'div', $attribs, $out );

		$out = $previewhead . $out . $editpage->previewTextAfterContent;

		return false;
	}

	/**
	 * Hook for EditPage::showStandardInputs:options to add our form fields to
	 * the "editOptions" area of the page.
	 *
	 * @param EditPage $editpage
	 * @param OutputPage $output
	 * @param int $tabindex
	 * @return bool
	 */
	public static function injectOptions( $editpage, $output, &$tabindex ) {
		global $wgTemplateSandboxEditNamespaces;

		// Show the form if the title is in a whitelisted namespace, or if the
		// user requested it with &wpTemplateSandboxShow
		$showForm = $editpage->getTitle()->inNamespaces( $wgTemplateSandboxEditNamespaces )
			|| $output->getRequest()->getCheck( 'wpTemplateSandboxShow' );

		if ( !$showForm ) {
			// output the values in hidden fields so that a user
			// using a gadget doesn't have to re-enter them every time

			$html = Xml::openElement( 'span', [ 'id' => 'templatesandbox-editform' ] );

			$html .= Html::hidden( 'wpTemplateSandboxTemplate',
				$editpage->templatesandbox_template, [ 'id' => 'wpTemplateSandboxTemplate' ]
			);

			$html .= Html::hidden( 'wpTemplateSandboxPage',
				$editpage->templatesandbox_page, [ 'id' => 'wpTemplateSandboxPage' ]
			);

			$html .= Xml::closeElement( 'span' );

			$output->addHTML( $html . "\n" );

			return true;
		}

		$output->addModuleStyles( 'ext.TemplateSandbox.top' );
		$output->addModules( 'ext.TemplateSandbox' );

		$context = $editpage->getContext();

		$textHtml = '';
		$text = $context->msg( 'templatesandbox-editform-text' );
		if ( !$text->isDisabled() ) {
			$textAttrs = [
				'class' => 'mw-templatesandbox-editform-text',
			];
			$textHtml = Xml::tags( 'div', $textAttrs, $text->parse() );
		}

		$helptextHtml = '';
		$helptext = $context->msg( 'templatesandbox-editform-helptext' );
		if ( !$helptext->isDisabled() ) {
			$helptextAttrs = [
				'class' => 'mw-templatesandbox-editform-helptext',
			];
			$helptextHtml = Xml::tags( 'span', $helptextAttrs, $helptext->parse() );
		}

		$hiddenInputsHtml =
			Html::hidden( 'wpTemplateSandboxTemplate',
				$editpage->templatesandbox_template, [ 'id' => 'wpTemplateSandboxTemplate' ]
			) .
			// If they submit our form, pass the parameter along for non-whitelisted namespaces
			Html::hidden( 'wpTemplateSandboxShow', '' );

		$oouiEnabled = method_exists( $editpage, 'isOouiEnabled' ) && $editpage->isOouiEnabled();

		if ( $oouiEnabled ) {
			$output->enableOOUI();
			$output->addModules( 'oojs-ui-core' );
			$output->addModules( 'mediawiki.widgets' );

			$fieldsetLayout =
				new OOUI\FieldsetLayout( [
					'label' => new OOUI\HtmlSnippet( $context->msg( 'templatesandbox-editform-legend' )->parse() ),
					'id' => 'templatesandbox-editform',
					'classes' => [ 'mw-templatesandbox-fieldset' ],
					'items' => [
						// TODO: OOUI should provide a plain content layout, as this is
						// technically an abstract class
						new OOUI\Layout( [
							'content' => new OOUI\HtmlSnippet( $textHtml . "\n" . $hiddenInputsHtml )
						] ),
						new OOUI\ActionFieldLayout(
							new MediaWiki\Widget\TitleInputWidget( [
								'id' => 'wpTemplateSandboxPage',
								'name' => 'wpTemplateSandboxPage',
								'value' => $editpage->templatesandbox_page,
								'tabIndex' => ++$tabindex,
								'placeholder' => $context->msg( 'templatesandbox-editform-page-label' )->text(),
								'infusable' => true,
							] ),
							new OOUI\ButtonInputWidget( [
								'id' => 'wpTemplateSandboxPreview',
								'name' => 'wpTemplateSandboxPreview',
								'label' => $context->msg( 'templatesandbox-editform-view-label' )->text(),
								'tabIndex' => ++$tabindex,
								'type' => 'submit',
								'useInputTag' => true,
							] ),
							[ 'align' => 'top' ]
						)
					]
				] );

			if ( $helptextHtml ) {
				$fieldsetLayout->addItems( [
					// TODO: OOUI should provide a plain content layout, as this is
					// technically an abstract class
					new OOUI\Layout( [
						'content' => new OOUI\HtmlSnippet( $helptextHtml )
					] )
				] );
			}
			$output->addHTML( $fieldsetLayout );

		} else {
			$inputHtml = '';

			$inputAttrs = [
				'id' => 'wpTemplateSandboxPage',
				'tabindex' => ++$tabindex,
				'size' => 60,
				'spellcheck' => 'true',
				'class' => 'mw-searchInput',
				'data-mw-searchsuggest' => FormatJson::encode( [
					'wrapAsLink' => false,
				] ),
			];

			$labelText = $context->msg( 'templatesandbox-editform-page-label' );
			if ( !$labelText->isDisabled() ) {
				$spanLabelAttrs = [
					'class' => 'mw-templatesandbox-page',
					'id' => "wpTemplateSandboxPageLabel"
				];
				$label = Xml::tags( 'label', [ 'for' => $inputAttrs['id'] ], $labelText->parse() );
				$label = Xml::tags( 'span', $spanLabelAttrs, $label );
				$inputHtml .= $label . " ";
			}

			$inputHtml .= Html::input( 'wpTemplateSandboxPage',
				$editpage->templatesandbox_page, 'text', $inputAttrs
			);

			$attrs = [
				'id' => 'wpTemplateSandboxPreview',
				'name' => 'wpTemplateSandboxPreview',
				'type' => 'submit',
				'tabindex' => ++$tabindex,
				'value' => $context->msg( 'templatesandbox-editform-view-label' )->text(),
			];
			$inputHtml .= Xml::element( 'input', $attrs, '' );

			// Make fieldset
			$fieldSet = Xml::openElement( 'fieldset', [ 'id' => 'templatesandbox-editform' ] );
			$fieldSet .= Html::rawElement( 'legend', null,
				$context->msg( 'templatesandbox-editform-legend' )->parse() );

			$fieldSet .=
				$textHtml . "\n" .
				$hiddenInputsHtml . "\n" .
				$inputHtml . "\n" .
				$helptextHtml . "\n";

			$fieldSet .= Xml::closeElement( 'fieldset' );

			$output->addHTML( $fieldSet . "\n" );
		}

		return true;
	}

	/**
	 * Determine if this API module is appropriate for us to mess with.
	 * @param ApiBase $module
	 * @return bool
	 */
	private static function isUsableApiModule( $module ) {
		return $module instanceof ApiParse || $module instanceof ApiExpandTemplates;
	}

	/**
	 * Hook for APIGetAllowedParams to add our API parameters to the relevant
	 * modules.
	 *
	 * @param ApiBase $module
	 * @param array $params
	 * @param int $flags
	 * @return bool
	 */
	public static function onAPIGetAllowedParams( $module, &$params, $flags ) {
		if ( !self::isUsableApiModule( $module ) ) {
			return true;
		}

		$params += [
			'templatesandboxprefix' => [
				ApiBase::PARAM_TYPE => 'string',
				ApiBase::PARAM_ISMULTI => true,
				ApiBase::PARAM_HELP_MSG => 'templatesandbox-apihelp-prefix',
			],
			'templatesandboxtitle' => [
				ApiBase::PARAM_TYPE => 'string',
				ApiBase::PARAM_HELP_MSG => 'templatesandbox-apihelp-title',
			],
			'templatesandboxtext' => [
				ApiBase::PARAM_TYPE => 'text',
				ApiBase::PARAM_HELP_MSG => 'templatesandbox-apihelp-text',
			],
			'templatesandboxcontentmodel' => [
				ApiBase::PARAM_TYPE => ContentHandler::getContentModels(),
				ApiBase::PARAM_HELP_MSG => 'templatesandbox-apihelp-contentmodel',
			],
			'templatesandboxcontentformat' => [
				ApiBase::PARAM_TYPE => ContentHandler::getAllContentFormats(),
				ApiBase::PARAM_HELP_MSG => 'templatesandbox-apihelp-contentformat',
			],
		];
		return true;
	}

	/**
	 * Hook for ApiMakeParserOptions to set things up for TemplateSandbox
	 * parsing when necessary.
	 *
	 * @param ParserOptions $options
	 * @param Title $title
	 * @param array $params
	 * @param ApiBase $module
	 * @param null &$reset Set to a ScopedCallback used to reset any hooks set.
	 * @param bool &$suppressCache
	 * @return bool
	 */
	public static function onApiMakeParserOptions(
		$options, $title, $params, $module, &$reset, &$suppressCache
	) {
		// Shouldn't happen, but...
		if ( !self::isUsableApiModule( $module ) ) {
			return true;
		}

		$params += [
			'templatesandboxprefix' => [],
			'templatesandboxtitle' => null,
			'templatesandboxtext' => null,
			'templatesandboxcontentmodel' => null,
			'templatesandboxcontentformat' => null,
		];
		$params = [
			'prefix' => $params['templatesandboxprefix'] ?: [],
			'title' => $params['templatesandboxtitle'],
			'text' => $params['templatesandboxtext'],
			'contentmodel' => $params['templatesandboxcontentmodel'],
			'contentformat' => $params['templatesandboxcontentformat'],
		];

		if ( ( $params['title'] === null ) !== ( $params['text'] === null ) ) {
			$p = $module->getModulePrefix();
			$module->dieWithError( [ 'templatesandbox-apierror-titleandtext', $p ], 'invalidparammix' );
		}

		$prefixes = [];
		foreach ( $params['prefix'] as $prefix ) {
			$prefixTitle = Title::newFromText( rtrim( $prefix, '/' ) );
			if ( !$prefixTitle instanceof Title || $prefixTitle->getFragment() !== '' ||
				$prefixTitle->isExternal()
			) {
				$p = $module->getModulePrefix();
				$module->dieWithError(
					[ 'apierror-badparameter', "{$p}templatesandboxprefix" ], "bad_{$p}templatesandboxprefix"
				);
			}
			$prefixes[] = $prefixTitle->getFullText();
		}

		if ( $params['title'] !== null ) {
			$page = $module->getTitleOrPageId( $params );
			if ( $params['contentmodel'] == '' ) {
				$contentHandler = $page->getContentHandler();
			} else {
				$contentHandler = ContentHandler::getForModelID( $params['contentmodel'] );
			}

			$escName = wfEscapeWikiText( $page->getTitle()->getPrefixedDBkey() );
			$model = $contentHandler->getModelID();

			if ( $contentHandler->supportsDirectApiEditing() === false ) {
				$module->dieWithError( [ 'apierror-no-direct-editing', $model, $escName ] );
			}

			$format = $params['contentformat'] ?: $contentHandler->getDefaultFormat();
			if ( !$contentHandler->isSupportedFormat( $format ) ) {
				$module->dieWithError( [ 'apierror-badformat', $format, $model, $escName ] );
			}

			$templatetitle = $page->getTitle();
			$content = $contentHandler->makeContent( $params['text'], $page->getTitle(), $model, $format );

			// Apply PST to templatesandboxtext
			$popts = $page->makeParserOptions( $module );
			$popts->setEditSection( false );
			$popts->setIsPreview( true );
			$popts->setIsSectionPreview( false );
			$user = RequestContext::getMain()->getUser();
			$content = $content->preSaveTransform( $templatetitle, $user, $popts );
		} else {
			$templatetitle = null;
			$content = null;
		}

		if ( $prefixes || $templatetitle ) {
			$logic = new TemplateSandboxLogic( $prefixes, $templatetitle, $content );
			$reset = $logic->setupForParse( $options );
			$suppressCache = true;
		}

		return true;
	}

}
