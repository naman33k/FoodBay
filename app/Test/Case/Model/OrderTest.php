<?php
/* Order Test cases generated on: 2012-02-19 10:30:20 : 1329647420*/
App::uses('Order', 'Model');

/**
 * Order Test Case
 *
 */
class OrderTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.order', 'app.user', 'app.fav_order', 'app.dish', 'app.rating_dish', 'app.menu_section', 'app.menu', 'app.restaurant', 'app.location', 'app.restaurant_service', 'app.time_interval', 'app.restaurant_services_time_interval', 'app.restaurant_rating', 'app.tax', 'app.cuisine', 'app.cuisines_restaurant', 'app.cuisines_user', 'app.dishes_menu_section', 'app.menu_sections_time_interval', 'app.dishes_order', 'app.tag', 'app.dishes_tag', 'app.dishes_time_interval');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Order = ClassRegistry::init('Order');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Order);

		parent::tearDown();
	}

}
