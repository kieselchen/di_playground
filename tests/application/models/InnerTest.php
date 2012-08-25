<?php

require_once '../application/models/Inner.php';

// require_once 'PHPUnit/Framework/TestCase.php';

/**
 * Application_Model_Inner test case.
 */
class Application_Model_InnerTest extends PHPUnit_Framework_TestCase {
	
	/**
	 *
	 * @var Application_Model_Inner
	 */
	private $Application_Model_Inner;
	
	/**
	 * Prepares the environment before running a test.
	 */
	protected function setUp() {
		parent::setUp ();
		
		$this->Application_Model_Inner = new Application_Model_Inner(/* parameters */);
	}
	
	/**
	 * Cleans up the environment after running a test.
	 */
	protected function tearDown() {
		$this->Application_Model_Inner = null;
		
		parent::tearDown ();
	}
	
	/**
	 * Tests Application_Model_Inner->__construct()
	 */
	public function test__construct() {
		
		$this->Application_Model_Inner->__construct();
	}
	
	/**
	 * Tests Application_Model_Inner->setText()
	 */
	public function testSetText() {
		
		$this->Application_Model_Inner->setText("hello");
		
		$this->assertEquals("hello", $this->Application_Model_Inner->getText());
	}
	
	/**
	 * Tests Application_Model_Inner->getText()
	 */
	public function testGetText() {

		$this->Application_Model_Inner->setText("hello1");
		
		$this->assertEquals("hello1", $this->Application_Model_Inner->getText());
	}
}

