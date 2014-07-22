<?php
App::uses('PricesGame', 'Model');

/**
 * PricesGame Test Case
 *
 */
class PricesGameTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.prices_game',
		'app.game',
		'app.company',
		'app.dev_company',
		'app.dev',
		'app.user',
		'app.product',
		'app.deals_game',
		'app.token'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PricesGame = ClassRegistry::init('PricesGame');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PricesGame);

		parent::tearDown();
	}

}
