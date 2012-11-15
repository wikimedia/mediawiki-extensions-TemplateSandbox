<?php
/**
 * Internationalisation for TemplateSandbox
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
	'templatesandbox-desc' => '[[Special:TemplateSandbox|Renders a page]] transcluding templates from a sandbox',

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

/** Message documentation (Message documentation)
 * @author Brad Jorsch
 */
$messages['qqq'] = array(
	'templatesandbox' => 'The name of the [[mw:Extension:TemplateSandbox|TemplateSandbox extension]].',
	'templatesandbox-desc' => 'The description of the [[mw:Extension:TemplateSandbox|TemplateSandbox extension]].
{{desc}}',
	'templatesandbox-suffix' => "Suffix added to the current user's userpage for the default sandbox prefix.",
	'templatesandbox-legend' => 'Legend displayed on the input form.',
	'templatesandbox-text' => 'Text displayed in the input form.',
	'templatesandbox-prefix-label' => 'Label for the "prefix" input field.',
	'templatesandbox-page-label' => 'Label for the "page" input field on the editpage form.',
	'templatesandbox-revid-label' => 'Label for the "revid" input field.',
	'templatesandbox-text-label' => 'Label for the "text" input field.',
	'templatesandbox-submit' => 'Label for the submit button',
	'templatesandbox-title-output' => 'Message used when displaying the parsed page title. $1 is the parsed page title.',
	'templatesandbox-editform-legend' => 'Text used for the legend on the editpage form',
	'templatesandbox-preview' => 'Title of preview section when previwing another page using this template. $1 is the page being previewed.',
	'templatesandbox-previewnote' => 'Message displayed when previwing another page using this template. $1 is the page being previewed.',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'templatesandbox' => 'Zona de probas para os modelos',
	'templatesandbox-desc' => '[[Special:TemplateSandbox|Renderiza unha páxina]] coa transclusión dun ou varios modelos desde unha zona de probas',
	'templatesandbox-suffix' => 'zona de probas',
	'templatesandbox-legend' => 'Zona de probas para o modelo',
	'templatesandbox-prefix-label' => 'Prefixo da zona de probas',
	'templatesandbox-page-label' => 'Páxina de renderización:',
	'templatesandbox-revid-label' => 'Revisión de renderización:',
	'templatesandbox-text-label' => 'Texto wiki de renderización:',
	'templatesandbox-submit' => 'Ver',
	'templatesandbox-title-output' => 'Zona de probas para os modelos: $1',
	'templatesandbox-editform-legend' => 'Vista previa da páxina con este modelo',
	'templatesandbox-editform-page-label' => 'Título da páxina:',
	'templatesandbox-editform-view-label' => 'Mostrar a vista previa',
	'templatesandbox-preview' => 'Vista previa de "$2"',
	'templatesandbox-previewnote' => "'''Lembre que esta é só unha vista previa de \"[[:\$1]]\".'''
Aínda non gardou os seus cambios!",
	'templatesandbox-invalid-title' => 'O título que especificou non é válido.',
	'templatesandbox-title-not-exists' => 'O título que especificou non existe.',
	'templatesandbox-revision-not-exists' => 'A revisión que especificou non existe.',
	'templatesandbox-invalid-prefix' => 'O prefixo da zona de probas que especificou non é válido.',
	'templatesandbox-prefix-not-local' => 'O prefixo da zona de probas que especificou non é local.',
	'templatesandbox-page-or-revid' => 'Cómpre indicar a páxina ou ben o identificador de revisión.',
	'templatesandbox-editform-need-title' => 'Para ollar a vista previa doutra páxina con este modelo, cómpre especificar un título de páxina.',
	'templatesandbox-editform-invalid-title' => 'O título que especificou para a vista previa non é válido.',
	'templatesandbox-editform-title-not-exists' => 'O título que especificou para a vista previa non existe.',
);
