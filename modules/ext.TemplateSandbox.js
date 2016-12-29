/** extensions/TemplateSandbox/modules/ext.TemplateSandbox.js **/
( function ( $ ) {
	$( function () {
		$( '#wpTemplateSandboxPage' ).keypress( function ( e ) {
			// On enter keypress, click the TemplateSandbox preview button
			if ( e.which === 13 ) {
				$( '#wpTemplateSandboxPreview' ).click();
				return false;
			}
			return true;
		} );
	} );
}( jQuery ) );
