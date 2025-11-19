/**
 * A custom TitleInputWidget that checks whether suggested pages use the
 * current template.
 *
 * @class
 * @extends mw.widgets.TitleInputWidget
 * @constructor
 * @param {Object} [config] Configuration options
 */
function TemplateSandboxTitleWidget( config ) {
	TemplateSandboxTitleWidget.super.call( this, config );
	this.templateTitleFunc = config.templateTitleFunc;
}

OO.inheritClass( TemplateSandboxTitleWidget, mw.widgets.TitleInputWidget );

TemplateSandboxTitleWidget.prototype.getApiParams = function ( query ) {
	const params = TemplateSandboxTitleWidget.super.prototype.getApiParams.call( this, query );
	params.prop.push( 'templates' );
	params.tltemplates = this.templateTitleFunc();
	return params;
};

TemplateSandboxTitleWidget.prototype.getPageData = function ( page, redirectIndex ) {
	const data = TemplateSandboxTitleWidget.super.prototype
		.getPageData.call( this, page, redirectIndex );
	data.usesTemplate = !!page.templates;
	return data;
};

TemplateSandboxTitleWidget.prototype.getOptionWidgetData = function ( title, data ) {
	const optionData = TemplateSandboxTitleWidget.super.prototype
		.getOptionWidgetData.call( this, title, data );
	optionData.usesTemplate = data.usesTemplate;
	return optionData;
};

TemplateSandboxTitleWidget.prototype.createOptionWidget = function ( data ) {
	const widget = new mw.widgets.TitleOptionWidget( data );
	if ( !data.usesTemplate ) {
		widget.$label.addClass( 'mw-templatesandbox-unused' );
	}
	return widget;
};

module.exports = TemplateSandboxTitleWidget;
