<?php

$wgExtensionCredits['parserhook'][] = array(
	'path' => __FILE__,
	'name' => 'txtscrl',
	'version' => '1.0',
	'license-name' => 'GPL-2.0+',
	'author' => 'Jordan Small',
	'descriptionmsg' => 'textscroller-desc',
	'url' => 'https://www.mediawiki.org/wiki/Extension:TextScroller',
);

// ResourceLoader support for MediaWiki 1.17+
$wgResourceModules['ext.textscroller.styles'] = array(
	'styles' => 'textscroller.css',
	'localBasePath' => __DIR__,
	'remoteExtPath' => 'TextScroller'
);

$wgResourceModules['ext.textscroller.scripts'] = array(
	'scripts' => 'textscroller.js',
	'localBasePath' => __DIR__,
	'remoteExtPath' => 'TextScroller'
);

$wgAutoloadClasses['TextScroller'] = __DIR__ . '/TextScroller.body.php';
$wgMessagesDirs['TextScroller'] = __DIR__ . '/i18n';

$wgHooks['LanguageGetMagic'][] = 'TextScroller::languageGetMagic';
$wgHooks['ParserFirstCallInit'][] = 'TextScroller::setParserFunction';
