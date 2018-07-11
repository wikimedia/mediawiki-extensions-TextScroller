<?php

if ( function_exists( 'wfLoadExtension' ) ) {
	wfLoadExtension( 'TextScroller' );
	// Keep i18n globals so mergeMessageFileList.php doesn't break
	$wgMessagesDirs['TextScroller'] = __DIR__ . '/i18n';
	$wgExtensionMessagesFiles['TextScrollerMagic'] = __DIR . '/TextScroller.i18n.magic.php';
	wfWarn(
		'Deprecated PHP entry point used for TextScroller extension. Please use wfLoadExtension instead, ' .
		'see https://www.mediawiki.org/wiki/Extension_registration for more details.'
	);
	return;
} else {
	die( 'This version of the TextScroller extension requires MediaWiki 1.25+' );
}

