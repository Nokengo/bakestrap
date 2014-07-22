<?php
App::uses('DevCompany', 'Model');

/**
 * DevCompany Test Case
 *
 */
class DevCompanyTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dev_company',
		'app.dev',
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
		$this->DevCompany = ClassRegistry::init('DevCompany');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DevCompany);

		parent::tearDown();
	}

}
