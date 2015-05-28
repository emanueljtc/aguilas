<?php
App::uses('Baptism', 'Model');

/**
 * Baptism Test Case
 *
 */
class BaptismTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.baptism',
		'app.member'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Baptism = ClassRegistry::init('Baptism');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Baptism);

		parent::tearDown();
	}

}
