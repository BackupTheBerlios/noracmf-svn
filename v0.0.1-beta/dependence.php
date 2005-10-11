<?php
/**
 * @category   dependence
 * @package    root
 * @author     Klaus Weiss <klaus.weiss@nanet.at>
 * @author 
 * 
 * @link       http://noracmf.berlios.de
 * @copyright  Klaus Weiss <klaus.weiss@nanet.at>
 * @license    BSD
 *
 * @lastchange 09.10.2005 16:46
*/
if(!defined("nora")) exit();

// load database configs
$config = simplexml_load_file($rootpath."config.xml");

if(!$config) {
	// Error
}

// generate config variable
foreach($config->Database as $configDatabase) {
}
foreach($config->Debug as $configDebug) {
}
foreach($config->Software as $configSoftware) {
}

// check installation
if(!$configSoftware->Installed) {
	// not yet installed
}

// require include files
require_once($rootpath."includes/database.php");



?>