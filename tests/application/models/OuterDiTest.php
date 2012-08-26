<?php

use Zend\Di\Di;
use Zend\Di\Config;

require_once '../application/models/OuterDi.php';
require_once '../application/models/Inner.php';
//require_once 'PHPUnit/Framework/TestCase.php';

/**
 * Application_Models_Outer test case.
 */
class Application_Models_OuterDiTest extends PHPUnit_Framework_TestCase {
	
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

		$di = new Di();
		
		$di->instanceManager()->setParameters('Application_Model_Inner', array(
				'text' => 'unit'
		));
			
		$this->Application_Models_Outer = new Application_Models_OuterDi($di);
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

