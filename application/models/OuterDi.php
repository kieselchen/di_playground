<?php
use Zend\Di\Di;
require_once '../application/models/Inner.php';

class Application_Models_OuterDi {
	
	private $_di;
	
	function __construct($di = null){
		
		if ($di !== null) {
			$this->_di = $di;
		} else {
			$this->_di = new Di();
		}
	}
	
	private function _getInner() {
		return $this->_di->get("Application_Model_Inner");
	}
	
	public function hello() {
		return $this->_getInner()->getText()  . "!";
	}
}

?>