<?php
/* Restaurants Test cases generated on: 2012-02-18 18:38:48 : 1329590328*/
App::uses('RestaurantsController', 'Controller');

/**
 * TestRestaurantsController *
 */
class TestRestaurantsController extends RestaurantsController {
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
 * RestaurantsController Test Case
 *
 */
class RestaurantsControllerTestCase extends CakeTestCase {
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

		$this->Restaurants = new TestRestaurantsController();
		$this->Restaurants->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Restaurants);

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
