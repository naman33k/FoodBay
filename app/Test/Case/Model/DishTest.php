<?php
/* Dish Test cases generated on: 2012-02-19 10:22:18 : 1329646938*/
App::uses('Dish', 'Model');

/**
 * Dish Test Case
 *
 */
class DishTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.dish', 'app.rating_dish', 'app.user', 'app.menu_section', 'app.dishes_menu_section', 'app.order', 'app.dishes_order', 'app.tag', 'app.dishes_tag', 'app.time_interval', 'app.dishes_time_interval');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Dish = ClassRegistry::init('Dish');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Dish);

		parent::tearDown();
	}

}
