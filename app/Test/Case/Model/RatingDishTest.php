<?php
/* RatingDish Test cases generated on: 2012-02-19 10:17:36 : 1329646656*/
App::uses('RatingDish', 'Model');

/**
 * RatingDish Test Case
 *
 */
class RatingDishTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.rating_dish', 'app.user', 'app.dish', 'app.menu_section', 'app.dishes_menu_section', 'app.order', 'app.dishes_order', 'app.tag', 'app.dishes_tag', 'app.time_interval', 'app.dishes_time_interval', 'app.rating');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->RatingDish = ClassRegistry::init('RatingDish');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RatingDish);

		parent::tearDown();
	}

}
