/** extensions/TemplateSandbox/modules/ext.TemplateSandbox.js **/
jQuery( function ( $ ) {
	$( '#wpTemplateSandboxPage' ).keypress( function ( ev ) {
		// On enter keypress, click the TemplateSandbox preview button
		if ( ev.which === 13 ) {
			$( '#wpTemplateSandboxPreview' ).click();
			return false;
		}
		return true;
	} );
} );
