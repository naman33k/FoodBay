<?php
/* RestaurantService Test cases generated on: 2012-02-18 18:58:37 : 1329591517*/
App::uses('RestaurantService', 'Model');

/**
 * RestaurantService Test Case
 *
 */
class RestaurantServiceTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.restaurant_service', 'app.location', 'app.restaurant', 'app.menu', 'app.restaurant_rating', 'app.tax', 'app.cuisine', 'app.cuisines_restaurant', 'app.user', 'app.cuisines_user', 'app.time_interval', 'app.restaurant_services_time_interval');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->RestaurantService = ClassRegistry::init('RestaurantService');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RestaurantService);

		parent::tearDown();
	}

}
