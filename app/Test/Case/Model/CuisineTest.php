<?php
/* Cuisine Test cases generated on: 2012-02-18 18:42:09 : 1329590529*/
App::uses('Cuisine', 'Model');

/**
 * Cuisine Test Case
 *
 */
class CuisineTestCase extends CakeTestCase {
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

		$this->Cuisine = ClassRegistry::init('Cuisine');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Cuisine);

		parent::tearDown();
	}

}
