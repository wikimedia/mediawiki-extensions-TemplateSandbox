<?php

use MediaWiki\MediaWikiServices;
use MediaWiki\Revision\SlotRecord;
use Wikimedia\ScopedCallback;

/**
 * Business logic class for TemplateSandbox
 */
class TemplateSandboxLogic {
	private static $counter = 0;

	/** Prefixes to search for sandbox templates */
	private $prefixes = [];

	/** Title to replace with $content */
	private $title = null;

	/** Content to replace $title */
	private $content = null;

	/**
	 * @param string[] $prefixes Title prefixes to search for sandbox templates
	 * @param Title|null $title Title to replace with 'content'
	 * @param Content|null $content Content to use to replace 'title'
	 */
	public function __construct( $prefixes, $title, $content ) {
		if ( ( $title === null ) !== ( $content === null ) ) {
			throw new InvalidArgumentException( '$title and $content must both be given or both be null' );
		}

		$this->prefixes = $prefixes;
		$this->title = $title;
		$this->content = $content;
	}

	/**
	 * Set up a ParserOptions for TemplateSandbox operation.
	 * @param ParserOptions $popt
	 * @return ScopedCallback to uninstall
	 */
	public function setupForParse( ParserOptions $popt ) {
		global $wgHooks;

		$id = 'TemplateSandbox.' . ++self::$counter;

		$inHook = false;
		$wgHooks['TitleExists'][$id] = function ( $title, &$exists ) use ( &$inHook ) {
			if ( $exists || $inHook ) {
				return;
			}
			$inHook = true;
			$titleText = $title->getPrefixedText();
			try {
				if ( $this->title && $this->title->equals( $title ) ) {
					$exists = true;
					return;
				}

				foreach ( $this->prefixes as $prefix ) {
					$newtitle = Title::newFromText( $prefix . '/' . $titleText );
					if ( $newtitle instanceof Title && $newtitle->exists() ) {
						$exists = true;
						return;
					}
				}
			} finally {
				$inHook = false;
			}
		};

		$oldCurrentRevisionCallback = $popt->setCurrentRevisionCallback(
			function ( $title, $parser = false ) use ( &$oldCurrentRevisionCallback ) {
				if ( $this->title && $this->title->equals( $title ) ) {
					$user = RequestContext::getMain()->getUser();
					return new Revision( [
						'page' => $title->getArticleID(),
						'user_text' => $user->getName(),
						'user' => $user->getId(),
						'parent_id' => $title->getLatestRevId(),
						'title' => $title,
						'content' => $this->content
					] );
				}

				foreach ( $this->prefixes as $prefix ) {
					$newtitle = Title::newFromText( $prefix . '/' . $title->getPrefixedText() );
					if ( $newtitle instanceof Title && $newtitle->exists() ) {
						$title = $newtitle;
						break;
					}
				}
				return call_user_func( $oldCurrentRevisionCallback, $title, $parser );
			}
		);

		MediaWikiServices::getInstance()->getLinkCache()->clear();

		return new ScopedCallback( function () use ( $id ) {
			global $wgHooks;
			unset( $wgHooks['TitleExists'][$id] );
			MediaWikiServices::getInstance()->getLinkCache()->clear();
		} );
	}

	/**
	 * Add a handler for sandbox subpages to the OutputPage
	 * @param array $prefixes
	 * @param OutputPage $output
	 */
	public static function addSubpageHandlerToOutput( array $prefixes, OutputPage $output ) {
		$cache = [];
		$output->addContentOverrideCallback( function ( Title $title ) use ( $prefixes, &$cache ) {
			$titleText = $title->getPrefixedText();
			if ( array_key_exists( $titleText, $cache ) ) {
				return $cache[$titleText];
			}
			foreach ( $prefixes as $prefix ) {
				$newtitle = Title::newFromText( $prefix . '/' . $titleText );
				if ( $newtitle instanceof Title && $newtitle->exists() ) {
					$rev = MediaWikiServices::getInstance()
						->getRevisionLookup()
						->getRevisionByTitle( $newtitle );
					$content = $rev ? $rev->getContent( SlotRecord::MAIN ) : null;
					if ( $content ) {
						$cache[$titleText] = $content;
						return $content;
					}
				}
			}
			$cache[$titleText] = null;
			return null;
		} );
	}

}
