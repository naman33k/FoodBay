<?php
App::uses('AppModel', 'Model');
/**
 * TimeInterval Model
 *
 * @property Dish $Dish
 * @property MenuSection $MenuSection
 * @property RestaurantService $RestaurantService
 */
class TimeInterval extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'start_time' => array(
			'time' => array(
				'rule' => array('time'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'end_time' => array(
			'time' => array(
				'rule' => array('time'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Dish' => array(
			'className' => 'Dish',
			'joinTable' => 'dishes_time_intervals',
			'foreignKey' => 'time_interval_id',
			'associationForeignKey' => 'dish_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'MenuSection' => array(
			'className' => 'MenuSection',
			'joinTable' => 'menu_sections_time_intervals',
			'foreignKey' => 'time_interval_id',
			'associationForeignKey' => 'menu_section_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'RestaurantService' => array(
			'className' => 'RestaurantService',
			'joinTable' => 'restaurant_services_time_intervals',
			'foreignKey' => 'time_interval_id',
			'associationForeignKey' => 'restaurant_service_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
