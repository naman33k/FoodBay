<?php
App::uses('AppController', 'Controller');
/**
 * Dishes Controller
 *
 * @property Dish $Dish
 */
class DishesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Dish->recursive = 0;
		$this->set('dishes', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Dish->id = $id;
		if (!$this->Dish->exists()) {
			throw new NotFoundException(__('Invalid dish'));
		}
		$this->set('dish', $this->Dish->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Dish->create();
			if ($this->Dish->save($this->request->data)) {
				$this->Session->setFlash(__('The dish has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dish could not be saved. Please, try again.'));
			}
		}
		$menuSections = $this->Dish->MenuSection->find('list');
		$orders = $this->Dish->Order->find('list');
		$tags = $this->Dish->Tag->find('list');
		$timeIntervals = $this->Dish->TimeInterval->find('list');
		$this->set(compact('menuSections', 'orders', 'tags', 'timeIntervals'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Dish->id = $id;
		if (!$this->Dish->exists()) {
			throw new NotFoundException(__('Invalid dish'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Dish->save($this->request->data)) {
				$this->Session->setFlash(__('The dish has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dish could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Dish->read(null, $id);
		}
		$menuSections = $this->Dish->MenuSection->find('list');
		$orders = $this->Dish->Order->find('list');
		$tags = $this->Dish->Tag->find('list');
		$timeIntervals = $this->Dish->TimeInterval->find('list');
		$this->set(compact('menuSections', 'orders', 'tags', 'timeIntervals'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Dish->id = $id;
		if (!$this->Dish->exists()) {
			throw new NotFoundException(__('Invalid dish'));
		}
		if ($this->Dish->delete()) {
			$this->Session->setFlash(__('Dish deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Dish was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
