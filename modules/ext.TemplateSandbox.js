/** extensions/TemplateSandbox/modules/ext.TemplateSandbox.js */
/* eslint-disable no-jquery/no-global-selector */
$( () => {
	const $page = $( '#wpTemplateSandboxPage' );

	// eslint-disable-next-line no-jquery/no-class-state
	if ( $page.hasClass( 'oo-ui-widget' ) ) {
		// These modules are added to the page from the PHP code,
		// but they may not have loaded yet.
		// Ideally, they would just be dependencies of this module,
		// but OOUI mode is still optional.
		mw.loader.using( [ 'oojs-ui-core', 'mediawiki.widgets' ] ).then( () => {
			const widget = OO.ui.infuse( $page );
			widget.on( 'enter', ( e ) => {
				$( '#wpTemplateSandboxPreview .oo-ui-inputWidget-input' ).trigger( 'click' );
				e.preventDefault();
			} );
		} );
	} else {
		$page.on( 'keypress', ( e ) => {
			// On enter keypress, click the TemplateSandbox preview button
			if ( e.which === 13 ) {
				$( '#wpTemplateSandboxPreview' ).trigger( 'click' );
				return false;
			}
			return true;
		} );
	}
} );
