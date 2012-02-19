<?php
/* MenuSection Test cases generated on: 2012-02-19 10:25:28 : 1329647128*/
App::uses('MenuSection', 'Model');

/**
 * MenuSection Test Case
 *
 */
class MenuSectionTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.menu_section', 'app.menu', 'app.dish', 'app.rating_dish', 'app.user', 'app.dishes_menu_section', 'app.order', 'app.dishes_order', 'app.tag', 'app.dishes_tag', 'app.time_interval', 'app.dishes_time_interval', 'app.menu_sections_time_interval');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->MenuSection = ClassRegistry::init('MenuSection');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MenuSection);

		parent::tearDown();
	}

}
