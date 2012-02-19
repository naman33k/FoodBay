<?php
/* TimeInterval Test cases generated on: 2012-02-19 10:41:56 : 1329648116*/
App::uses('TimeInterval', 'Model');

/**
 * TimeInterval Test Case
 *
 */
class TimeIntervalTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.time_interval', 'app.dish', 'app.rating_dish', 'app.user', 'app.menu_section', 'app.menu', 'app.restaurant', 'app.location', 'app.restaurant_service', 'app.restaurant_services_time_interval', 'app.restaurant_rating', 'app.tax', 'app.cuisine', 'app.cuisines_restaurant', 'app.cuisines_user', 'app.dishes_menu_section', 'app.menu_sections_time_interval', 'app.order', 'app.fav_order', 'app.dishes_order', 'app.tag', 'app.dishes_tag', 'app.dishes_time_interval');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->TimeInterval = ClassRegistry::init('TimeInterval');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TimeInterval);

		parent::tearDown();
	}

}
