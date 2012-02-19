<?php
/* Tax Test cases generated on: 2012-02-19 10:40:28 : 1329648028*/
App::uses('Tax', 'Model');

/**
 * Tax Test Case
 *
 */
class TaxTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.tax', 'app.restaurant', 'app.location', 'app.restaurant_service', 'app.time_interval', 'app.restaurant_services_time_interval', 'app.user', 'app.menu', 'app.menu_section', 'app.dish', 'app.rating_dish', 'app.dishes_menu_section', 'app.order', 'app.fav_order', 'app.dishes_order', 'app.tag', 'app.dishes_tag', 'app.dishes_time_interval', 'app.menu_sections_time_interval', 'app.restaurant_rating', 'app.cuisine', 'app.cuisines_restaurant', 'app.cuisines_user');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Tax = ClassRegistry::init('Tax');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Tax);

		parent::tearDown();
	}

}
