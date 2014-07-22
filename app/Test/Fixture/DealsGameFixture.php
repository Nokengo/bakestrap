<?php
/**
 * DealsGameFixture
 *
 */
class DealsGameFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'deals_game';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'game_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'price' => array('type' => 'decimal', 'null' => true, 'default' => null, 'length' => '15,2', 'unsigned' => false),
		'token_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
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
			'game_id' => 1,
			'user_id' => 1,
			'price' => '',
			'token_id' => 1,
			'created' => '2014-07-21 19:12:13',
			'modified' => '2014-07-21 19:12:13'
		),
	);

}
