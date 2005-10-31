<?php
/**
 * @category   template linker
 * @package    includes
 * @author     Klaus Weiss <klaus.weiss@nanet.at>
 * @author     Klaus Weiss <klaus.weiss@nanet.at>
 * 
 * @link       http://noracmf.berlios.de
 * @copyright  Klaus Weiss <klaus.weiss@nanet.at>
 * @license    GPL
 *
 * @lastchange 30.10.2005 19:46
*/
if(!defined("nora")) exit();

// require template class
require_once($rootpath."noracmf/template/template.php");


switch($configTemplate->Method) {
case '':
case 'xml':
	$template = new template();
	$template->templateDir = $rootpath."ext/templates/".$configTemplate->Name."/";
	$template->xslDir      = $template->templateDir."/xsl/";
	$template->cacheDir    = $template->templateDir."cache/";
	break;
}


// set Arrays
$mainLink = array("name"  => array(),
                  "desc"  => array(),
				  "link"  => array(),
				  "chmod" => array(),
				  "code"  => array(),
				  "count" => array());
				  
$subLink = array("name"    => array(),
				 "desc"    => array(),
				 "link"    => array(),
				 "main_id" => array(),
				 "chmod"   => array(),
				 "code"    => array(),
				 "count"   => array());
				 
// get Number of main links
$rs = $db->Execute("SELECT * FROM ".$dbPrefix."navigation_main");
$mainLink["count"] = $db->Affected_Rows($rs);

// get information of main links
for($i = 1; $i <= $mainLink["count"]; $i++) {
	$rs = $db->Execute("SELECT * FROM ".$dbPrefix."navigation_main WHERE id = '$i'");
	
	$mainLink["name"][$i]  = $rs->fields['name'];
	$mainLink["desc"][$i]  = $rs->fields['description'];
	$mainLink["link"][$i]  = $rs->fields['link'];
	$mainLink["chmod"][$i] = $rs->fields['chmod'];
	
	$mainlink["code"][$i]  = '<span id="navigation-links-cat1"><a href="'.$mainLink["link"][$i].'">'.$mainLink["name"][$i].'</a></span><base/>';
	
}



?>