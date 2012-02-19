<?php
/* FavOrder Test cases generated on: 2012-02-19 10:23:35 : 1329647015*/
App::uses('FavOrder', 'Model');

/**
 * FavOrder Test Case
 *
 */
class FavOrderTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.fav_order', 'app.user', 'app.order');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->FavOrder = ClassRegistry::init('FavOrder');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FavOrder);

		parent::tearDown();
	}

}
