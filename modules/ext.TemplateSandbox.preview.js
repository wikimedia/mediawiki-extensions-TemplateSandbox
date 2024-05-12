/** extensions/TemplateSandbox/modules/ext.TemplateSandbox.preview.js */

/* eslint-disable no-jquery/no-global-selector */
const preview = require( 'mediawiki.page.preview' );

/**
 * Modify the config and response objects based on the response.
 *
 * @private
 * @param {Object} config Options for live preview API
 * @param {Object} response Parse API response
 */
function responseHandler( config, response ) {
	// If the template was not used, generate an error response
	if ( !response.parse.templates.some( ( tpl ) => tpl.title === config.title ) ) {
		config.responseValidationError = mw.msg( 'templatesandbox-template-not-used' );
		return;
	}

	const displayTitle = response.parse.displaytitle;

	// Prevent the live preview API from overwriting the heading,
	// which should stay saying "Editing Template:Foo" etc.
	delete response.parse.displaytitle;

	// The default message doesn't use $1, but pass the raw title
	// to be consistent with the server side.
	config.previewHeader = mw.msg( 'templatesandbox-preview', response.parse.title, displayTitle );

	config.previewNote = mw.message( 'templatesandbox-previewnote', response.parse.title ).parseDom();
}

/**
 * @ignore
 * @param {jQuery.Event} e
 */
function doTemplateSandboxPreview( e ) {
	const $editform = $( '#editform' );

	const promise = preview.doPreview( {
		isLivePreview: true,
		// This is hidden and identical to wgPageName by default, but that
		// may change in the future, and there already exist user scripts
		// that allow customizing it.
		title: $editform.find( '[name="wpTemplateSandboxTemplate"]' ).val(),
		titleParam: 'templatesandboxtitle',
		textParam: 'templatesandboxtext',
		parseParams: {
			page: $editform.find( '[name="wpTemplateSandboxPage"]' ).val()
		},
		responseHandler: responseHandler,
		createSpinner: true
	} );

	if ( !promise ) {
		// Something has gone wrong, so submit the form the normal way.
		return;
	}

	e.preventDefault();
}

$( () => {
	$( '#wpTemplateSandboxPreview' ).on( 'click', doTemplateSandboxPreview );
} );
