<?php

require_once '../application/models/Outer.php';
require_once '../application/models/Inner.php';
//require_once 'PHPUnit/Framework/TestCase.php';

/**
 * Application_Models_Outer test case.
 */
class Application_Models_OuterMockTest extends PHPUnit_Framework_TestCase {
	
	/**
	 *
	 * @var Application_Models_Outer
	 */
	private $Application_Models_Outer;
	
	/**
	 * Prepares the environment before running a test.
	 */
	protected function setUp() {
		parent::setUp ();	

		$inner = $this->getMock("Application_Model_Inner");
		$inner->expects($this->once())->method("getText")->will($this->returnValue('unit'));
		
		$this->Application_Models_Outer = new Application_Models_Outer($inner);
	}
	
	/**
	 * Cleans up the environment after running a test.
	 */
	protected function tearDown() {
		$this->Application_Models_Outer = null;
		
		parent::tearDown ();
	}
	
	/**
	 * Tests Application_Models_Outer->hello()
	 */
	public function testHello() {

		$this->assertEquals($this->Application_Models_Outer->hello(), "unit!");
		
		
	}
}

