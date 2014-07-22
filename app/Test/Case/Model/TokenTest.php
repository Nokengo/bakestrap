<?php
App::uses('Token', 'Model');

/**
 * Token Test Case
 *
 */
class TokenTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.token',
		'app.user',
		'app.game',
		'app.company',
		'app.dev_company',
		'app.dev',
		'app.product',
		'app.deals_game'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Token = ClassRegistry::init('Token');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Token);

		parent::tearDown();
	}

}