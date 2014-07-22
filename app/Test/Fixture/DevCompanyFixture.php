<?php
/**
 * DevCompanyFixture
 *
 */
class DevCompanyFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'dev_company';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'dev_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'company_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'status' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'dev_id' => 1,
			'company_id' => 1,
			'created' => '2014-07-21 19:12:13',
			'modified' => '2014-07-21 19:12:13',
			'status' => 1
		),
	);

}
