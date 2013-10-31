<?php
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
 
// Include the syndicate functions only once
require_once( dirname(__FILE__).'/helper.php' );
 
$hello = modHelloWorldHelper::getHello( $params );
require( JModuleHelper::getLayoutPath( 'mod_playerwithlightbox' ) );
?>