<?php
/* RatingDishes Test cases generated on: 2012-02-19 10:17:49 : 1329646669*/
App::uses('RatingDishesController', 'Controller');

/**
 * TestRatingDishesController *
 */
class TestRatingDishesController extends RatingDishesController {
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
 * RatingDishesController Test Case
 *
 */
class RatingDishesControllerTestCase extends CakeTestCase {
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

		$this->RatingDishes = new TestRatingDishesController();
		$this->RatingDishes->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RatingDishes);

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
