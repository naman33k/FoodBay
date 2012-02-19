<?php
/* Restaurant Test cases generated on: 2012-02-18 18:37:49 : 1329590269*/
App::uses('Restaurant', 'Model');

/**
 * Restaurant Test Case
 *
 */
class RestaurantTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.restaurant', 'app.location', 'app.menu', 'app.restaurant_rating', 'app.restaurant_service', 'app.tax', 'app.cuisine', 'app.cuisines_restaurant');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Restaurant = ClassRegistry::init('Restaurant');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Restaurant);

		parent::tearDown();
	}

}
