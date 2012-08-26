<?php

/** 
 * @author axhm3a
 * 
 */
class Application_Model_Inner {
	
	private $text;
	
	/**
	 */
	function __construct($text = '') {
		$this->text = $text;
	}
	
	public function setText($text) {
		$this->text = $text;
	}
	
	public function getText() {
		return $this->text;
	}
}

?>