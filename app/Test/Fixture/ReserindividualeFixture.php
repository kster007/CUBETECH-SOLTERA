<?php
/**
 * ReserindividualeFixture
 *
 */
class ReserindividualeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'primary'),
		'tipocliente_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'tipoclientesub_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'cliente_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'tipohabitacione_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'habitacione_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'reserstatusindividuale_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'fecha_entrada' => array('type' => 'date', 'null' => false, 'default' => null),
		'fecha_salida' => array('type' => 'date', 'null' => false, 'default' => null),
		'obseraciones' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'dias' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'precioxdia' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '26,2', 'unsigned' => false),
		'total' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '26,2', 'unsigned' => false),
		'resermultiple_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
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
			'tipocliente_id' => 1,
			'tipoclientesub_id' => 1,
			'cliente_id' => 1,
			'tipohabitacione_id' => 1,
			'habitacione_id' => 1,
			'reserstatusindividuale_id' => 1,
			'fecha_entrada' => '2016-11-07',
			'fecha_salida' => '2016-11-07',
			'obseraciones' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'dias' => 'Lorem ipsum dolor sit amet',
			'precioxdia' => 1,
			'total' => 1,
			'resermultiple_id' => 1,
			'created' => '2016-11-07 09:26:26',
			'modified' => '2016-11-07 09:26:26'
		),
	);

}
