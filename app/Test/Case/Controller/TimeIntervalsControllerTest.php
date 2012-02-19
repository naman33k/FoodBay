<?php
/* TimeIntervals Test cases generated on: 2012-02-19 10:42:16 : 1329648136*/
App::uses('TimeIntervalsController', 'Controller');

/**
 * TestTimeIntervalsController *
 */
class TestTimeIntervalsController extends TimeIntervalsController {
/**
 * Auto render
 *
 * @var boolean
 */
	public $autoRender = false;

/**
 * Redirect action
 *
 * @param mixed $url
 * @param mixed $status
 * @param boolean $exit
 * @return void
 */
	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

/**
 * TimeIntervalsController Test Case
 *
 */
class TimeIntervalsControllerTestCase extends CakeTestCase {
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

		$this->TimeIntervals = new TestTimeIntervalsController();
		$this->TimeIntervals->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TimeIntervals);

		parent::tearDown();
	}

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {

	}

/**
 * testView method
 *
 * @return void
 */
	public function testView() {

	}

/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {

	}

/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {

	}

/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {

	}

}
