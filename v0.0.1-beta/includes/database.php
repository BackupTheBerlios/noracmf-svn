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
$dbms     = $configDatabase->Type;


switch($dbms) {
case 'db2':
	if($configDatabase->Persist === true) {
	
		// persist connection
		$dsn = "driver={IBM db2 odbc DRIVER};Database=$dbName;hostname=$dbHost;port=$dbPort;protocol=TCPIP;".
			   "uid=$dbUser;pwd=$dbPasswd";
		$db->PConnect($dsn);
		if(!$db) exit("Database Error");
		$db->debug = $configDebug->Debug;
	} else {
	
		// non-persist connection
		$dsn = "driver={IBM db2 odbc DRIVER};Database=$dbName;hostname=$dbHost;port=$dbPort;protocol=TCPIP;".
			   "uid=$dbUser;pwd=$dbPasswd";
		$db->Connect($dsn);
		if(!$db) exit("Database Error");
		$db->debug = $configDebug->Debug;
	}
	break;		


case 'firebird':
	if($configDatabase->Persist === true) {
	
		// persist connection
		$dsn = "firebird://$dbUser:$dbPasswd@$dbHost/$dbName?persist";
		$db  = ADONewConnection($dsn);
		if(!$db) exit("Database Error");
		$db->debug = $configDebug->Debug;
	} else {
	
		// non-persist connection
		$dsn = "firebird://$dbUser:$dbPasswd@$dbHost/$dbName";
		$db  = ADONewConnection($dsn);
		if(!db) exit("Database Error");
		$db->debug = $configDebug->Debug;
	}
	break;


case 'mysql':
	if($configDatabase->Persist === true) {

		// persist connection
		$dsn = "mysql://$dbUser:$dbPasswd@$dbHost/$dbName?persist";
		$db  = ADONewConnection($dsn);
		if(!$db) exit("Database Error");
		$db->debug = $configDebug->Debug;
	} else {
	
		// non-persist connection
		$dsn = "mysql://$dbUser:$dbPasswd@$dbHost/$dbName";
		$db = ADONewConnection($dsn);
		if(!$db) exit("Database Error");
		$db->debug = $configDebug->Debug;
	}
	break;
	
	
case 'postgres':
	if($configDatabase->Persist === true) {
	
		// persist connection
		$dsn = "postgres://$dbUser:$dbPasswd@$dbHost/$dbName?persist";
		$db  = ADONewConnection($dsn);
		if(!db) exit("Database Error");
		$db->debug = $configDebug->Debug;
	} else {
		
		// non-persist connection
		$dsn = "postgres://$dbUser:$dbPasswd@$dbHost/$dbName";
		$db  = ADONewConnection($dsn);
		if(!db) exit("Database Error");
		$db->debug = $configDebug->Debug;
	}
	break;
	
	
default:
	// default
?>