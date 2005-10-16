<?php
/**
 * @category   email class
 * @package    network
 * @author     Klaus Weiss <klaus.weiss@nanet.at>
 * @author 
 * 
 * @link       http://noracmf.sourceforge.net
 * @copyright  Klaus Weiss <klaus.weiss@nanet.at>
 * @license:   BSD
 *
 * @lastchange 16.10.2005 11:17
*/

class email
{
	public $user   = "";
	public $domain = "";
	
	public $debug  = false;
	
	
	public function __construct($email)
	{
		$this->debug = $configDebug->Debug;
		$this->checkSyntax($email);
	}
	
	
	public function checkSyntax($email)
	{
		$this->user = substr($email,0,strrpos($email,"@"));
		$this->domain = substr($email, strrpos($email,"@") 1);
		
		if(strlen($this->user) >= 1 AND preg_match("/^[_a-z0-9-.] ([_a-z0-9-.])$/i", $this->user)) {
			
			if(gethostbyname($this->domain) != $this->domain) {
				
				return true;
				
			} else {
			
				return false;
			}
		}
	}
	
	
	public function __destruct()
	{
	}
}

?>