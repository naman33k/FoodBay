<?php
/* Dishes Test cases generated on: 2012-02-19 10:22:36 : 1329646956*/
App::uses('DishesController', 'Controller');

/**
 * TestDishesController *
 */
class TestDishesController extends DishesController {
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
 * DishesController Test Case
 *
 */
class DishesControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.dish', 'app.rating_dish', 'app.user', 'app.menu_section', 'app.dishes_menu_section', 'app.order', 'app.dishes_order', 'app.tag', 'app.dishes_tag', 'app.time_interval', 'app.dishes_time_interval');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Dishes = new TestDishesController();
		$this->Dishes->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Dishes);

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
