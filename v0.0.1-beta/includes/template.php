<?php
/**
 * @category   template linker
 * @package    includes
 * @author     Klaus Weiss <klaus.weiss@nanet.at>
 * @author     Klaus Weiss <klaus.weiss@nanet.at>
 * 
 * @link       http://noracmf.berlios.de
 * @copyright  Klaus Weiss <klaus.weiss@nanet.at>
 * @license    BSD
 *
 * @lastchange 26.10.2005 16:02
*/
if(!defined("nora")) exit();

// require template class
require_once($rootpath."noracmf/core/template/libs/Smarty.class.php");

$template = new Smarty();

if($configTemplate->Name == "" OR $configTemplate->Name == "standard") {
	$template->template_dir = $rootpath.'ext/templates/standard/template/';
	$template->cache_dir    = $rootpath.'ext/templates/standard/cache/';
	$template->compile_dir  = $rootpath.'ext/templates/standard/template_c';
	$siteCSS                = $rootpath.'ext/templates/standard/template/css/standard.css';
	$siteImg				= $rootpath.'ext/templates/standard/template/img/';
} else {
	$template->template_dir = $rootpath.'ext/templates/'.$configTemplate->Name.'/template/';
	$template->cache_dir    = $rootpath.'ext/templates/'.$configTemplate->Name.'/cache/';
	$template->compile_dir  = $rootpath.'ext/templates/'.$configTemplate->Name.'/template_c';
	$siteCSS                = $rootpath.'ext/templates/'.$configTemplate->Name.'/template/css/'.strtolower($configTemplate->Name).'.css';
}

$template->caching = $configTemplate->Cache


?>