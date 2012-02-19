<?php
/* RestaurantRating Test cases generated on: 2012-02-19 10:37:29 : 1329647849*/
App::uses('RestaurantRating', 'Model');

/**
 * RestaurantRating Test Case
 *
 */
class RestaurantRatingTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.restaurant_rating', 'app.user', 'app.restaurant', 'app.location', 'app.restaurant_service', 'app.time_interval', 'app.restaurant_services_time_interval', 'app.menu', 'app.menu_section', 'app.dish', 'app.rating_dish', 'app.dishes_menu_section', 'app.order', 'app.fav_order', 'app.dishes_order', 'app.tag', 'app.dishes_tag', 'app.dishes_time_interval', 'app.menu_sections_time_interval', 'app.tax', 'app.cuisine', 'app.cuisines_restaurant', 'app.cuisines_user');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->RestaurantRating = ClassRegistry::init('RestaurantRating');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RestaurantRating);

		parent::tearDown();
	}

}
