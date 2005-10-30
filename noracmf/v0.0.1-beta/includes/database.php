<?php
/**
 * @category   database linker
 * @package    includes
 * @author     Klaus Weiss <klaus.weiss@nanet.at>
 * @author 
 * 
 * @link       http://noracmf.berlios.de
 * @copyright  Klaus Weiss <klaus.weiss@nanet.at>
 * @license    GPL
 *
 * @lastchange 30.10.2005 19:28
*/
if(!defined("nora")) exit();

// require adodb
require_once($rootpath."noracmf/database/adodb.inc.php");

// define variables
$dbHost    = $db['Host'];
$dbPort    = $db['Port'];
$dbUser    = $db['User'];
$dbPasswd  = $db['Passwd'];
$dbName    = $db['Name'];
$dbms      = $db['Typ'];
$dbPrefix  = $db['Prefix'];	
$dbPersist = $db['Persist'];

switch($dbms) {
case 'firebird':
	if($dbPersist === true) {
	
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
	if($dbPersist === true) {

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
	if($dbPersist === true) {
	
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
	break;
}
?>