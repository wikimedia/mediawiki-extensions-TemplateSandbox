<?php
/**
 * Template sandboxing for MediaWiki.
 * Copyright (C) 2012 Brad Jorsch <bjorsch@wikimedia.org>
 * http://www.mediawiki.org/
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 */

# Alert the user that this is not a valid entry point to MediaWiki if they try
# to access the special pages file directly.
if ( !defined( 'MEDIAWIKI' ) ) {
	echo <<<EOT
<p>This is the TemplateSandbox extension. To enable it, put the following line
in LocalSettings.php:</p>
<pre>require_once( "\$IP/extensions/TemplateSandbox/TemplateSandbox.php" );</pre>
EOT;
	exit( 1 );
}

/**
 * Options:
 *
 * $wgTemplateSandboxEditNamespaces
 *       - Namespaces for which to add a "Preview page with this template" box
 *         to the edit form.
 */

$wgTemplateSandboxEditNamespaces = array(
	NS_TEMPLATE
);

$wgExtensionCredits['specialpage'][] = array(
	'path' => __FILE__,
	'name' => 'TemplateSandbox',
	'author' => 'Brad Jorsch',
	'url' => 'https://www.mediawiki.org/wiki/Extension:TemplateSandbox',
	'descriptionmsg' => 'templatesandbox-desc',
	'version' => '1.1.0',
);

$wgAutoloadClasses['TemplateSandboxHooks'] = __DIR__ . '/TemplateSandbox.hooks.php';
$wgAutoloadClasses['SpecialTemplateSandbox'] = __DIR__ . '/SpecialTemplateSandbox.php';
$wgMessagesDirs['TemplateSandbox'] = __DIR__ . '/i18n';
$wgExtensionMessagesFiles['TemplateSandbox'] = __DIR__ . '/TemplateSandbox.i18n.php';
$wgExtensionMessagesFiles['TemplateSandboxAlias'] = __DIR__ . '/TemplateSandbox.alias.php';
$wgSpecialPages['TemplateSandbox'] = 'SpecialTemplateSandbox';
$wgSpecialPageGroups['TemplateSandbox'] = 'wiki';
$wgHooks['EditPage::importFormData'][] = 'TemplateSandboxHooks::importFormData';
$wgHooks['EditPage::showStandardInputs:options'][] = 'TemplateSandboxHooks::injectOptions';
$wgHooks['AlternateEditPreview'][] = 'TemplateSandboxHooks::templateSandboxPreview';

$wgResourceModules['ext.TemplateSandbox'] = array(
	'scripts' => 'ext.TemplateSandbox.js',
	'position' => 'bottom',
	'localBasePath' => __DIR__ . '/modules',
	'remoteExtPath' => 'TemplateSandbox/modules'
);
