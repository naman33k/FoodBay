<?php
/* RestaurantService Fixture generated on: 2012-02-18 18:58:36 : 1329591516 */

/**
 * RestaurantServiceFixture
 *
 */
class RestaurantServiceFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'location_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'restaurant_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'minorder' => array('type' => 'float', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => 'This is I have kept as float and nullable .. Do make note of such fields'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'location_id' => 1,
			'restaurant_id' => 1,
			'minorder' => 1
		),
	);
}
