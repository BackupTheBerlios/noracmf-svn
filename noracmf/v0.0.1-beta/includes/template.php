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
//if(!defined("nora")) exit();

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

?>