<?php
App::uses('Product', 'Model');

/**
 * Product Test Case
 *
 */
class ProductTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.product',
		'app.company',
		'app.dev_company',
		'app.dev',
		'app.user',
		'app.game',
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
		$this->Product = ClassRegistry::init('Product');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Product);

		parent::tearDown();
	}

}
