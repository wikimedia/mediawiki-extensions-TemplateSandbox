/* eslint-disable no-jquery/no-global-selector */
$( () => {
	// Register our widget in a global so that OOUI infuse can find it
	mw.widgets.TemplateSandboxTitleWidget =
		require( 'ext.TemplateSandbox.TemplateSandboxTitleWidget' );

	const $template = $( '#wpTemplateSandboxTemplate' );
	const widget = OO.ui.infuse(
		$( '#wpTemplateSandboxPage' ),
		{ templateTitleFunc: () => $template.val() }
	);
	widget.on( 'enter', ( e ) => {
		$( '#wpTemplateSandboxPreview .oo-ui-inputWidget-input' ).trigger( 'click' );
		e.preventDefault();
	} );
} );
