<?php
/**
 * @category   database linker
 * @package    includes
 * @author     Klaus Weiss <klaus.weiss@nanet.at>
 * @author 
 * 
 * @link       http://noracmf.berlios.de
 * @copyright  Klaus Weiss <klaus.weiss@nanet.at>
 * @license    BSD
 *
 * @lastchange 11.10.2005 16:44
*/
if(!defined("nora")) exit();

// require adodb
require_once($rootpath."noracmf/core/database/adodb.inc.php");

// define variables
$dbHost   = $configDatabase->Host;
$dbPort   = $configDatabase->Port;
$dbUser   = $configDatabase->User;
$dbPasswd = $configDatabase->Password;
$dbName   = $configDatabase->Name;
$dbms = strtolower($configDatabase->Type);


switch($dbms) {
case 'mysql':
	if($configDatabase->Persist === true) {

		// persist connection
		$dsn = "mysql://$dbUser:$dbPasswd@$dbHost/$dbName?persist";
		$db = ADONewConnection($dsn);
		if(!db) exit("Database Error");
		$db->debug = $configDebug->Debug;
	} else {
	
		// non-persist connection
		$dsn = "mysql://$dbUser:$dbPasswd@$dbHost/$dbName";
		$db = ADONewConnection($dsn);
		if(!$db) exit("Database Error");
		$db->debug = $configDebug->Debug;
	}
	break;
	
case 'postgres7':
	break;
	
default:
	// default
?>