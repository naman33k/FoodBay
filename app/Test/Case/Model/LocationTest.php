<?php
/* Location Test cases generated on: 2012-02-19 10:24:41 : 1329647081*/
App::uses('Location', 'Model');

/**
 * Location Test Case
 *
 */
class LocationTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.location', 'app.restaurant_service', 'app.restaurant', 'app.menu', 'app.restaurant_rating', 'app.tax', 'app.cuisine', 'app.cuisines_restaurant', 'app.user', 'app.cuisines_user', 'app.time_interval', 'app.restaurant_services_time_interval');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Location = ClassRegistry::init('Location');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Location);

		parent::tearDown();
	}

}
