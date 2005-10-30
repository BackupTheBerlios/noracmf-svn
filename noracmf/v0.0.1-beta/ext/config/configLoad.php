<?php
/**
 * @category   config loader
 * @package    root
 * @author     Klaus Weiss <klaus.weiss@nanet.at>
 * @author 
 * 
 * @link       http://noracmf.sourceforge.net
 * @copyright  Klaus Weiss <klaus.weiss@nanet.at>
 * @license:   GPL
 *
 * @lastchange 19.10.2005 23:04
*/
if(!defined("nora")) exit();

require_once($rootpath.'ext/config/config.php');

$config = simplexml_load_file($rootpath.'ext/config/config.xml');

if(!$config) {
	// Error
}


// generate config variable
foreach($config->Common as $configCommon);
foreach($config->Debug as $configDebug);
foreach($config->Software as $configSoftware);
foreach($config->Template as $configTemplate);


// check installation
if(!$configSoftware->Installed) {
	// not yet installed
}
?>