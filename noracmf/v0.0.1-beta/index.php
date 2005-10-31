<?php
/**
 * @category   index
 * @package    root
 * @author     Klaus Weiss <klaus.weiss@nanet.at>
 * @author 
 * 
 * @link       http://noracmf.sourceforge.net
 * @copyright  Klaus Weiss <klaus.weiss@nanet.at>
 * @license:   GPL
 *
 * @lastchange 30.10.2005 21:10
*/
define('nora', true);
error_reporting(E_ALL);
$rootpath = './';
require_once($rootpath.'dependence.php');

$template->display("index.xml", "indexHTML.xsl");
?>