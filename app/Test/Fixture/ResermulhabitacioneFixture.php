<?php
/**
 * ResermulhabitacioneFixture
 *
 */
class ResermulhabitacioneFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'primary'),
		'resermultiple_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'habitacione_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'id' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '',
			'resermultiple_id' => 1,
			'habitacione_id' => 1,
			'created' => '2016-11-07 09:27:00',
			'modified' => '2016-11-07 09:27:00'
		),
	);

}
