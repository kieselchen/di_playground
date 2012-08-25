<?php
class Application_Models_Outer {
	
	private $_inner;
	
	function __construct($inner){
		$this->_inner = $inner;
	}
	
	public function hello() {
		return $this->_inner->getText()  . "!";
	}
}

?>