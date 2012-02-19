<?php
/* Taxes Test cases generated on: 2012-02-19 10:40:40 : 1329648040*/
App::uses('TaxesController', 'Controller');

/**
 * TestTaxesController *
 */
class TestTaxesController extends TaxesController {
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
 * TaxesController Test Case
 *
 */
class TaxesControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.tax', 'app.restaurant', 'app.location', 'app.restaurant_service', 'app.time_interval', 'app.restaurant_services_time_interval', 'app.user', 'app.menu', 'app.menu_section', 'app.dish', 'app.rating_dish', 'app.dishes_menu_section', 'app.order', 'app.fav_order', 'app.dishes_order', 'app.tag', 'app.dishes_tag', 'app.dishes_time_interval', 'app.menu_sections_time_interval', 'app.restaurant_rating', 'app.cuisine', 'app.cuisines_restaurant', 'app.cuisines_user');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Taxes = new TestTaxesController();
		$this->Taxes->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Taxes);

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
