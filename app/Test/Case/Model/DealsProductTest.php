<?php
App::uses('DealsProduct', 'Model');

/**
 * DealsProduct Test Case
 *
 */
class DealsProductTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.deals_product',
		'app.product',
		'app.user',
		'app.address'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DealsProduct = ClassRegistry::init('DealsProduct');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DealsProduct);

		parent::tearDown();
	}

}
