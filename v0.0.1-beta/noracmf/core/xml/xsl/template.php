<?php
/**
 * @category   xsl template class
 * @package    xsl
 * @author     Klaus Weiss <klaus.weiss@nanet.at>
 * @author 
 * 
 * @link       http://noracmf.sourceforge.net
 * @copyright  Klaus Weiss <klaus.weiss@nanet.at>
 * @license:   BSD
 *
 * @lastchange 11.10.2005 18:57
*/

class template
{
	public $cacheType;
	public $cacheId;
	public $cacheDir;

	public function __construct()
	{
		// set vars
		$this->cacheType = $configCache->Type;
		$this->cacheId   = $configCache->Id;
		$this->cacheDir  = $configCache->Dir;
		
		// initialize cache class
		$cache = new Cache($this->cacheType, array('cache_dir' => $this->cacheDir));
	}
	
	
	public function load($xml, $xsl)
	{
		if(file_exists($rootpath.$xml) AND file_exists($rootpath.$xsl)) {
			// create cache id
			$this->cacheId = $cache->generateID($xml.$xsl);
		} else {
			// error
		}
	}
	
	
	public function __destruct()
	{
	}
}



?>