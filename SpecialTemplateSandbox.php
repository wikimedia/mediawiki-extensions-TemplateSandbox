<?php
class SpecialTemplateSandbox extends SpecialPage {
	private $prefixes = array();
	private $oldTemplateCallback = null;

	/**
	 * @var null|ParserOutput
	 */
	private $output = null;

	function __construct() {
		parent::__construct( 'TemplateSandbox' );
	}

	function execute( $par ) {
		$this->setHeaders();
		$this->checkPermissions();

		$request = $this->getRequest();

		if ( $par !== null && !$request->getCheck( 'page' ) ) {
			$request->setVal( 'page', $par );
		}

		$default_prefix = Title::makeTitle( NS_USER,
			$this->getUser()->getName() . '/' . $this->msg( 'templatesandbox-suffix' )->plain()
		)->getPrefixedText();

		$form = new HTMLForm( array(
			'prefix' => array(
				'type' => 'text',
				'name' => 'prefix',
				'default' => $default_prefix,
				'label-message' => 'templatesandbox-prefix-label',
				'validation-callback' => array( $this, 'validatePrefixParam' ),
			),

			'page' => array(
				'type' => 'text',
				'name' => 'page',
				'label-message' => 'templatesandbox-page-label',
				'validation-callback' => array( $this, 'validatePageParam' ),
			),

			'revid' => array(
				'type' => 'int',
				'name' => 'revid',
				'label-message' => 'templatesandbox-revid-label',
				'validation-callback' => array( $this, 'validateRevidParam' ),
			),

			'text' => array(
				'type' => 'textarea',
				'name' => 'text',
				'label-message' => 'templatesandbox-text-label',
				'rows' => 5,
			),
		), $this->getContext() );
		$form->setMethod( 'get' );
		$form->setSubmitCallback( array( $this, 'onSubmit' ) );
		$form->setWrapperLegend( $this->msg( 'templatesandbox-legend' ) );
		$form->addHeaderText( $this->msg( 'templatesandbox-text' )->parseAsBlock() );
		$form->setSubmitTextMsg( 'templatesandbox-submit' );

		$form->prepareForm();
		if ( $request->getCheck( 'page' ) || $request->getCheck( 'revid' ) ) {
			$form->displayForm( $form->trySubmit() );
		} else {
			$form->displayForm( false );
		}

		if ( $this->output !== null ) {
			$output = $this->getOutput();

			$output->addParserOutput( $this->output );
			$titleText = $this->output->getTitleText();
			if ( strval( $titleText ) !== '' ) {
				$output->setPageTitle( $this->msg( 'templatesandbox-title-output', $titleText ) );
			}
		}
	}

	/**
	 * @param $value string|null
	 * @param $allData
	 * @return bool|String
	 */
	function validatePageParam( $value, $allData ) {
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
	 * @param $value string|null
	 * @param $allData
	 * @return bool|String
	 */
	function validateRevidParam( $value, $allData ) {
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
	 * @param $value
	 * @param $allData
	 * @return bool|String
	 */
	function validatePrefixParam( $value, $allData ) {
		if ( $value === '' || $value === null ) {
			return true;
		}
		$prefixes = array_map( 'trim', explode( '|', $value ) );
		foreach ( $prefixes as $prefix ) {
			$title = Title::newFromText( rtrim( $prefix, '/' ) );
			if ( !$title instanceof Title || $title->getFragment() !== '' ) {
				return $this->msg( 'templatesandbox-invalid-prefix' )->parseAsBlock();
			}
			if ( !$title->isLocal() ) {
				return $this->msg( 'templatesandbox-prefix-not-local' )->parseAsBlock();
			}
			$this->prefixes[] = $title->getFullText();
		}
		return true;
	}

	/**
	 * @param $data array
	 * @param $form
	 * @return bool|String
	 */
	public function onSubmit( $data, $form ) {
		if ( $data['revid'] !== '' && $data['revid'] !== null ) {
			$rev = Revision::newFromId( $data['revid'] );
			$title = $rev->getTitle();
		} elseif ( $data['page'] !== '' && $data['page'] !== null ) {
			$title = Title::newFromText( $data['page'] );
			$rev = Revision::newFromTitle( $title );
		} else {
			return $this->msg( 'templatesandbox-page-or-revid' )->parseAsBlock();
		}

		wfProfileIn( __METHOD__ );

		if ( $data['text'] !== '' && $data['text'] !== null ) {
			$content = $rev->getContentHandler()->unserializeContent( $data['text'] );
		} else {
			$content = $rev->getContent( Revision::FOR_THIS_USER, $this->getUser() );
		}

		$page = WikiPage::factory( $title );
		$popts = $page->makeParserOptions( $this->getContext() );
		$popts->setIsPreview( true );
		$popts->setIsSectionPreview( false );
		$this->oldTemplateCallback = $popts->setTemplateCallback( array( $this, 'templateCallback' ) );
		$this->output = $content->getParserOutput( $title, $rev->getId(), $popts );

		wfProfileOut( __METHOD__ );

		return false;
	}

	/**
	 * @param $title Title
	 * @param $parser Parser|bool
	 * @return mixed
	 */
	function templateCallback( $title, $parser = false ) {
		$found = false;
		foreach ( $this->prefixes as $prefix ) {
			$newtitle = Title::newFromText( $prefix . '/' . $title->getFullText() );
			if ( $newtitle instanceof Title && $newtitle->exists() ) {
				$found = true;
				$title = $newtitle;
				break;
			}
		}
		if ( !$found && $title->isRedirect() ) {
			$rtitle = WikiPage::factory( $title )->getRedirectTarget();
			foreach ( $this->prefixes as $prefix ) {
				$newtitle = Title::newFromText( $prefix . '/' . $rtitle->getFullText() );
				if ( $newtitle instanceof Title && $newtitle->exists() ) {
					$title = $newtitle;
					break;
				}
			}
		}
		return call_user_func( $this->oldTemplateCallback, $title, $parser );
	}
}
