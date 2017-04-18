/** extensions/TemplateSandbox/modules/ext.TemplateSandbox.js **/
( function ( $, mw ) {
	$( function () {
		var widget,
			$page = $( '#wpTemplateSandboxPage' );
		if ( $page.hasClass( 'oo-ui-widget' ) ) {
			// These modules are added to the page from the PHP code, but they may not have loaded yet.
			// Ideally, they would just be dependencies of this module, but OOUI mode is still optional.
			mw.loader.using( [ 'oojs-ui-core', 'mediawiki.widgets' ] ).done( function () {
				widget = OO.ui.infuse( $page );
				widget.on( 'enter', function ( e ) {
					$( '#wpTemplateSandboxPreview .oo-ui-inputWidget-input' ).click();
					e.preventDefault();
				} );
			} );
		} else {
			$page.keypress( function ( e ) {
				// On enter keypress, click the TemplateSandbox preview button
				if ( e.which === 13 ) {
					$( '#wpTemplateSandboxPreview' ).click();
					return false;
				}
				return true;
			} );
		}
	} );
}( jQuery, mediaWiki ) );
