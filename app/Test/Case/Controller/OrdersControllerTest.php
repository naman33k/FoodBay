<?php
/* Orders Test cases generated on: 2012-02-19 10:30:32 : 1329647432*/
App::uses('OrdersController', 'Controller');

/**
 * TestOrdersController *
 */
class TestOrdersController extends OrdersController {
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
 * OrdersController Test Case
 *
 */
class OrdersControllerTestCase extends CakeTestCase {
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

		$this->Orders = new TestOrdersController();
		$this->Orders->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Orders);

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
