<?php
/* MenuSections Test cases generated on: 2012-02-19 10:25:46 : 1329647146*/
App::uses('MenuSectionsController', 'Controller');

/**
 * TestMenuSectionsController *
 */
class TestMenuSectionsController extends MenuSectionsController {
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
 * MenuSectionsController Test Case
 *
 */
class MenuSectionsControllerTestCase extends CakeTestCase {
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

		$this->MenuSections = new TestMenuSectionsController();
		$this->MenuSections->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MenuSections);

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
