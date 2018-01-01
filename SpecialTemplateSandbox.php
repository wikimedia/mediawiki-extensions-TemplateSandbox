<?php
class SpecialTemplateSandbox extends SpecialPage {
	private $prefixes = [];

	/**
	 * @var null|Title
	 */
	private $title = null;

	/**
	 * @var null|ParserOutput
	 */
	private $output = null;

	public function __construct() {
		parent::__construct( 'TemplateSandbox' );
	}

	protected function getGroupName() {
		return 'wiki';
	}

	public function execute( $par ) {
		$this->setHeaders();
		$this->checkPermissions();

		$request = $this->getRequest();
		$requirePost = $this->getConfig()->get( 'RawHtml' );

		if ( $par !== null && !$request->getCheck( 'page' ) ) {
			$request->setVal( 'page', $par );
		}

		$default_prefix = Title::makeTitle( NS_USER,
			$this->getUser()->getName() . '/' . $this->msg( 'templatesandbox-suffix' )->plain()
		)->getPrefixedText();

		$form = HTMLForm::factory( 'ooui', [
			'prefix' => [
				'type' => 'text',
				'name' => 'prefix',
				'default' => $default_prefix,
				'label-message' => 'templatesandbox-prefix-label',
				'validation-callback' => [ $this, 'validatePrefixParam' ],
			],

			'page' => [
				'type' => 'text',
				'name' => 'page',
				'label-message' => 'templatesandbox-page-label',
				'validation-callback' => [ $this, 'validatePageParam' ],
			],

			'revid' => [
				'type' => 'int',
				'name' => 'revid',
				'label-message' => 'templatesandbox-revid-label',
				'validation-callback' => [ $this, 'validateRevidParam' ],
			],

			'text' => [
				'type' => 'textarea',
				'name' => 'text',
				'label-message' => 'templatesandbox-text-label',
				'useeditfont' => true,
				'rows' => 5,
			],
		], $this->getContext() );
		$form->setMethod( $requirePost ? 'post' : 'get' );
		$form->setSubmitCallback( [ $this, 'onSubmit' ] );
		$form->setWrapperLegend( $this->msg( 'templatesandbox-legend' ) );
		$form->addHeaderText( $this->msg( 'templatesandbox-text' )->parseAsBlock() );
		$form->setSubmitTextMsg( 'templatesandbox-submit' );

		$form->prepareForm();
		if ( $request->getCheck( 'page' ) || $request->getCheck( 'revid' ) ) {
			$form->displayForm( $form->tryAuthorizedSubmit() );
		} else {
			$form->displayForm( false );
		}

		$error = false;
		if ( $requirePost && $this->getRequest()->wasPosted() ) {
			$user = $this->getUser();
			if ( $user->isAnon() && !$user->isAllowed( 'edit' ) ) {
				$error = 'templatesandbox-fail-post-anon';
			} elseif ( !$user->matchEditToken( $request->getVal( 'wpEditToken' ), '', $request ) ) {
				$error = 'templatesandbox-fail-post';
			}
		}
		if ( $error !== false ) {
			$this->getOutput()->wrapWikiMsg( "<div class='previewnote'>\n$1\n</div>", $error );
		} elseif ( $this->output !== null ) {
			// Wrap output in a div for proper language markup.
			$pageLang = $this->title->getPageViewLanguage();
			$attribs = [ 'lang' => $pageLang->getHtmlCode(), 'dir' => $pageLang->getDir(),
				'class' => 'mw-content-' . $pageLang->getDir() ];
			$this->output->setText( Html::rawElement( 'div', $attribs, $this->output->getRawText() ) );

			$output = $this->getOutput();
			$output->addParserOutput( $this->output );

			$output->addHTML( Html::rawElement( 'div', [ 'class' => 'limitreport' ],
				EditPage::getPreviewLimitReport( $this->output ) ) );
			$output->addModules( 'mediawiki.collapseFooterLists' );

			$titleText = $this->output->getTitleText();
			if ( strval( $titleText ) !== '' ) {
				$output->setPageTitle( $this->msg( 'templatesandbox-title-output', $titleText ) );
			}
		}
	}

	/**
	 * @param string|null $value
	 * @param array $allData
	 * @return bool|String
	 */
	public function validatePageParam( $value, $allData ) {
		if ( $value === '' || $value === null ) {
			return true;
		}
		$title = Title::newFromText( $value );
		if ( !$title instanceof Title ) {
			return $this->msg( 'templatesandbox-invalid-title' )->parseAsBlock();
		}
		if ( !$title->exists() ) {
			return $this->msg( 'templatesandbox-title-not-exists' )->parseAsBlock();
		}
		return true;
	}

	/**
	 * @param string|null $value
	 * @param array $allData
	 * @return bool|String
	 */
	public function validateRevidParam( $value, $allData ) {
		if ( $value === '' || $value === null ) {
			return true;
		}
		$revision = Revision::newFromId( $value );
		if ( $revision === null ) {
			return $this->msg( 'templatesandbox-revision-not-exists' )->parseAsBlock();
		}
		return true;
	}

	/**
	 * @param string|null $value
	 * @param array $allData
	 * @return bool|String
	 */
	public function validatePrefixParam( $value, $allData ) {
		if ( $value === '' || $value === null ) {
			return true;
		}
		$prefixes = array_map( 'trim', explode( '|', $value ) );
		foreach ( $prefixes as $prefix ) {
			$title = Title::newFromText( rtrim( $prefix, '/' ) );
			if ( !$title instanceof Title || $title->getFragment() !== '' ) {
				return $this->msg( 'templatesandbox-invalid-prefix' )->parseAsBlock();
			}
			if ( $title->isExternal() ) {
				return $this->msg( 'templatesandbox-prefix-not-local' )->parseAsBlock();
			}
			$this->prefixes[] = $title->getFullText();
		}
		return true;
	}

	/**
	 * @param array $data
	 * @param HTMLForm $form
	 * @return Status
	 */
	public function onSubmit( $data, $form ) {
		if ( $data['revid'] !== '' && $data['revid'] !== null ) {
			$rev = Revision::newFromId( $data['revid'] );
			$title = $rev->getTitle();
		} elseif ( $data['page'] !== '' && $data['page'] !== null ) {
			$title = Title::newFromText( $data['page'] );
			$rev = Revision::newFromTitle( $title );
		} else {
			return Status::newFatal( 'templatesandbox-page-or-revid' );
		}

		if ( $data['text'] !== '' && $data['text'] !== null ) {
			$content = $rev->getContentHandler()->unserializeContent( $data['text'] );
		} else {
			$content = $rev->getContent( Revision::FOR_THIS_USER, $this->getUser() );
		}

		$page = WikiPage::factory( $title );
		$popts = $page->makeParserOptions( $this->getContext() );
		$popts->setIsPreview( true );
		$popts->setIsSectionPreview( false );
		$logic = new TemplateSandboxLogic( $this->prefixes, null, null );
		$reset = $logic->setupForParse( $popts );
		$this->title = $title;
		$this->output = $content->getParserOutput( $title, $rev->getId(), $popts );

		return Status::newGood();
	}
}
