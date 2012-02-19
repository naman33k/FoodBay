<?php
/* Tag Test cases generated on: 2012-02-19 10:39:50 : 1329647990*/
App::uses('Tag', 'Model');

/**
 * Tag Test Case
 *
 */
class TagTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.tag', 'app.dish', 'app.rating_dish', 'app.user', 'app.menu_section', 'app.menu', 'app.restaurant', 'app.location', 'app.restaurant_service', 'app.time_interval', 'app.restaurant_services_time_interval', 'app.restaurant_rating', 'app.tax', 'app.cuisine', 'app.cuisines_restaurant', 'app.cuisines_user', 'app.dishes_menu_section', 'app.menu_sections_time_interval', 'app.order', 'app.fav_order', 'app.dishes_order', 'app.dishes_tag', 'app.dishes_time_interval');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Tag = ClassRegistry::init('Tag');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Tag);

		parent::tearDown();
	}

}
