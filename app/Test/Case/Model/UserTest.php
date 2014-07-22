<?php
App::uses('User', 'Model');

/**
 * User Test Case
 *
 */
class UserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->User = ClassRegistry::init('User');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->User);

		parent::tearDown();
	}

/**
 * testGenerateHashChangePassword method
 *
 * @return void
 */
	public function testGenerateHashChangePassword() {
		$this->markTestIncomplete('testGenerateHashChangePassword not implemented.');
	}

/**
 * testGetUsername method
 *
 * @return void
 */
	public function testGetUsername() {
		$this->markTestIncomplete('testGetUsername not implemented.');
	}

}
