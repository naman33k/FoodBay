<?php
/* RestaurantServices Test cases generated on: 2012-02-18 18:59:16 : 1329591556*/
App::uses('RestaurantServicesController', 'Controller');

/**
 * TestRestaurantServicesController *
 */
class TestRestaurantServicesController extends RestaurantServicesController {
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
 * RestaurantServicesController Test Case
 *
 */
class RestaurantServicesControllerTestCase extends CakeTestCase {
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

		$this->RestaurantServices = new TestRestaurantServicesController();
		$this->RestaurantServices->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RestaurantServices);

		parent::tearDown();
	}

}
