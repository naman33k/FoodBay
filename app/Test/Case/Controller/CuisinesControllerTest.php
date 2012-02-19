<?php
/* Cuisines Test cases generated on: 2012-02-18 18:42:24 : 1329590544*/
App::uses('CuisinesController', 'Controller');

/**
 * TestCuisinesController *
 */
class TestCuisinesController extends CuisinesController {
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
 * CuisinesController Test Case
 *
 */
class CuisinesControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.cuisine', 'app.restaurant', 'app.location', 'app.menu', 'app.restaurant_rating', 'app.restaurant_service', 'app.tax', 'app.cuisines_restaurant', 'app.user', 'app.cuisines_user');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Cuisines = new TestCuisinesController();
		$this->Cuisines->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Cuisines);

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
