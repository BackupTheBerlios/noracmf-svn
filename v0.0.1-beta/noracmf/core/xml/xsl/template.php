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
	public $cacheTime = 86400;
	public $cacheBoolean = false;
	
	public $executionTime;

	public function __construct()
	{
		// set vars
		//$this->cacheType = $configCache->Type;
		$this->cacheId   = $configCache->Id;
		$this->cacheDir  = $configCache->Dir;
		
		// initialize cache class
		require_once($rootpath."noracmf/core/pear/cache/Cache.php");
		$cache = new Cache("file", array('cache_dir' => $rootpath.$this->cacheDir));
	}
	
	
	public function load($xml, $xsl)
	{
				// initialize cache class
		require_once($rootpath."noracmf/core/pear/cache/Cache.php");
		$cache = new Cache("file", array('cache_dir' => $rootpath.$this->cacheDir));
		if(file_exists($rootpath.$xml) AND file_exists($rootpath.$xsl)) {
			// create cache id
			$this->cacheId = $cache->generateID($xml.$xsl);
			
			$this->timeStart = $this->getmicrotime();
			
			if(!$this->content = $cache->get($this->cacheId)) {
				
				$xslProcessor = xslt_create();
				
				$arguments = array('/_xml' => $xml);
				$this->content = xslt_process($xslProcessor, $rootpath."template/".$xml, $rootpath."template/xsl/".$xsl, NULL, $args);
				
				if(!$this->content) {
					// Error
				}
				
				xslt_free($xslProcessor);
				
				$cache->save($this->cacheId, $this->content, time() + $this->expireTime);
			} else $this->cacheBoolean = true;
			
			$this->timeStop = $this->getmicrotime();		
		} else {
			// error
		}
	}
	
	
	public function getmicrotime() 
	{
		list($usec, $sec) = explode(" ",microtime());
		return ((float)$usec + (float)$sec); 
 	}
 
	
	public function display()
	{
		$this->executionTime = round(($this->timeStop - $this->timeStart) * 1000000 / 1000);
		echo $this->content;
	}
	
	
	public function __destruct()
	{
		echo $this->cacheType;
	}
}

?>