/** extensions/TemplateSandbox/modules/ext.TemplateSandbox.js **/
( function ( $ ) {
	$( function () {
		// OOUI mode is currently optional
		var widget,
			$page = $( '#wpTemplateSandboxPage' );
		if ( $page.hasClass( 'oo-ui-widget' ) ) {
			widget = OO.ui.infuse( $page );
			widget.on( 'enter', function ( e ) {
				$( '#wpTemplateSandboxPreview .oo-ui-inputWidget-input' ).click();
				e.preventDefault();
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
}( jQuery ) );
