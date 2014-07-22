<?php
App::uses('DealsGame', 'Model');

/**
 * DealsGame Test Case
 *
 */
class DealsGameTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.deals_game',
		'app.game',
		'app.user',
		'app.token'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DealsGame = ClassRegistry::init('DealsGame');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DealsGame);

		parent::tearDown();
	}

}
