<?php
 
# Avoids illegal processing, doesn't cost much, but unnecessary on a correct installation
if (!defined('MEDIAWIKI')) { die(-1); } 
 
# Extension Declaration
$GLOBALS['wgExtensionCredits']['specialpage'][] = array(
	'path' => __FILE__,
	'name' => 'Hashsum',
	'author' => array('toniher'),
	'version' => '0.1',
	'url' => 'https://www.mediawiki/wiki/User:Toniher',
	'descriptionmsg' => 'hashsum-desc'
);
 
# A var to ease the referencing of files
$dir = dirname(__FILE__) . '/';

# i18n file referencing
$GLOBALS['wgMessagesDirs']['Hashsum'] = $dir . 'i18n';
$GLOBALS['wgExtensionMessagesFiles']['Hashsum'] = $dir . 'Hashsum.i18n.php';
$GLOBALS['wgExtensionMessagesFiles']['HashsumMagic'] = $dir . 'Hashsum.i18n.magic.php';

$GLOBALS['wgAutoloadClasses']['Hashsum'] = $dir . 'Hashsum_body.php';

$GLOBALS['wgHooks']['ParserFirstCallInit'][] = 'wfRegisterHashsum';


/**
 * @param $parser Parser
 * @return bool
 */
 
function wfRegisterHashsum( $parser ) {
	
	$parser->setFunctionHook( 'MD5sum', 'Hashsum::MD5sumProcess', Parser::SFH_OBJECT_ARGS );
	$parser->setFunctionHook( 'SHA1sum', 'Hashsum::SHA1sumProcess', Parser::SFH_OBJECT_ARGS );

	return true;
}