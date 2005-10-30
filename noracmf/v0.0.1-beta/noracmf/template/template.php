<?php
/**
 * @category   template class
 * @package    template
 * @author     Klaus Weiss <klaus.weiss@nanet.at>
 * @author 
 * 
 * @link       http://noracmf.sourceforge.net
 * @copyright  Klaus Weiss <klaus.weiss@nanet.at>
 * @license:   GPL
 *
 * @lastchange 30.10.2005 19:44
*/
if(!defined("nora")) exit();

class template
{
	public $templateDir;
	public $xslDir;
	public $cacheDir;
	
	public $xslFile;
	public $xmlFile;
	
	public $method;

	public function __construct($method = "")
	{
		if($method == "" OR $method == "xml") {
			$this->method = "xml";
		} else {
			// use other template engine
		}		
	}
	
	
	public function display($templateFile, $xslFile = "")
	{
		if($this->xslDir == "") $this->xslDir = $this->templateDir;
		
		if(!file_exists($this->templateDir.$templateFile) OR !file_exists($this->xslDir.$xslFile)) {
			// no files
		} else {
			switch($this->method) {
			case '':
			case 'xml':
				$xsl = new XSLTProcessor();
				
				$this->xmlFile = $this->templateDir.$templateFile;
				$this->xslFile = $this->xslDir.$xslFile;
				
				$xsl->importStyleSheet(DOMDocument::load($this->xslFile));
				echo $xsl->transformToXML(DOMDocument::load($this->xmlFile));
				break;
				
			default:
				// default
				break;
			}
		}
	}
	
	
}



?>