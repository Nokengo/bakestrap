<?php
App::uses('Dev', 'Model');

/**
 * Dev Test Case
 *
 */
class DevTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dev',
		'app.user',
		'app.dev_company',
		'app.company',
		'app.game',
		'app.product'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Dev = ClassRegistry::init('Dev');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Dev);

		parent::tearDown();
	}

}
