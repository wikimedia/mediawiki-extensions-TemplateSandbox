<?php
/**
 * Internationalisation for templatesandbox
 *
 * @file
 * @ingroup Extensions
 */
$messages = array();
 
/** English
 * @author Brad Jorsch
 */
$messages['en'] = array(
	'templatesandbox' => "TemplateSandbox", // Important! This is the string that appears on Special:SpecialPages
	'templatesandbox-desc' => "[[Special:TemplateSandbox|Renders a page]] transcluding templates from a sandbox.",

	'templatesandbox-suffix' => 'sandbox',
	'templatesandbox-legend' => 'Template Sandbox',
	'templatesandbox-text' => '',
	'templatesandbox-prefix-label' => 'Sandbox prefix:',
	'templatesandbox-page-label' => 'Render page:',
	'templatesandbox-revid-label' => 'Render revision:',
	'templatesandbox-text-label' => 'Render wikitext:',
	'templatesandbox-submit' => 'View',
	'templatesandbox-title-output' => 'TemplateSandbox: $1',

	'templatesandbox-editform-legend' => 'Preview page with this template',
	'templatesandbox-editform-page-label' => 'Page title:',
	'templatesandbox-editform-view-label' => 'Show Preview',
	'templatesandbox-preview' => "Preview of $2",
	'templatesandbox-previewnote' => "'''Remember that this is only a preview of [[:$1]].'''
Your changes have not yet been saved!",

	'templatesandbox-invalid-title' => 'The title you specified is invalid.',
	'templatesandbox-title-not-exists' => 'The title you specified does not exist.',
	'templatesandbox-revision-not-exists' => 'The revision you specified does not exist.',
	'templatesandbox-invalid-prefix' => 'The sandbox prefix you specified is invalid.',
	'templatesandbox-prefix-not-local' => 'The sandbox prefix you specified is not local.',
	'templatesandbox-page-or-revid' => 'Either page or revid is required.',

	'templatesandbox-editform-need-title' => 'To preview another page with this template, a page title must be specified.',
	'templatesandbox-editform-invalid-title' => 'The title you specified for previewing is invalid.',
	'templatesandbox-editform-title-not-exists' => 'The title you specified for previewing does not exist.',
);
 
/** Message documentation
 * @author Brad Jorsch
 */
$messages['qqq'] = array(
	'templatesandbox' => "The name of the [[mw:Extension:TemplateSandbox|TemplateSandbox extension]].",
	'templatesandbox-desc' => "The description of the [[mw:Extension:TemplateSandbox|TemplateSandbox extension]].
{{desc}}",

	'templatesandbox-suffix' => 'Suffix added to the current user\'s userpage for the default sandbox prefix.',
	'templatesandbox-legend' => 'Legend displayed on the input form.',
	'templatesandbox-text' => 'Text displayed in the input form.',
	'templatesandbox-prefix-label' => 'Label for the "prefix" input field.',
	'templatesandbox-page-label' => 'Label for the "page" input field.',
	'templatesandbox-revid-label' => 'Label for the "revid" input field.',
	'templatesandbox-text-label' => 'Label for the "text" input field.',
	'templatesandbox-submit' => 'Label for the submit button',
	'templatesandbox-title-output' => 'Message used when displaying the parsed page title. $1 is the parsed page title.',

	'templatesandbox-editform-legend' => 'Text used for the legend on the editpage form',
	'templatesandbox-page-label' => 'Label for the "page" input field on the editpage form.',
	'templatesandbox-view-label' => 'Label for the submit button on the editpage form.',
	'templatesandbox-preview' => "Title of preview section when previwing another page using this template. $1 is the page being previewed.",
	'templatesandbox-previewnote' => "Message displayed when previwing another page using this template. $1 is the page being previewed.",
);
