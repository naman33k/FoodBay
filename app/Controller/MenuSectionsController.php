<?php
App::uses('AppController', 'Controller');
/**
 * MenuSections Controller
 *
 * @property MenuSection $MenuSection
 */
class MenuSectionsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->MenuSection->recursive = 0;
		$this->set('menuSections', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->MenuSection->id = $id;
		if (!$this->MenuSection->exists()) {
			throw new NotFoundException(__('Invalid menu section'));
		}
		$this->set('menuSection', $this->MenuSection->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MenuSection->create();
			if ($this->MenuSection->save($this->request->data)) {
				$this->Session->setFlash(__('The menu section has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The menu section could not be saved. Please, try again.'));
			}
		}
		$menus = $this->MenuSection->Menu->find('list');
		$dishes = $this->MenuSection->Dish->find('list');
		$timeIntervals = $this->MenuSection->TimeInterval->find('list');
		$this->set(compact('menus', 'dishes', 'timeIntervals'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->MenuSection->id = $id;
		if (!$this->MenuSection->exists()) {
			throw new NotFoundException(__('Invalid menu section'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->MenuSection->save($this->request->data)) {
				$this->Session->setFlash(__('The menu section has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The menu section could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->MenuSection->read(null, $id);
		}
		$menus = $this->MenuSection->Menu->find('list');
		$dishes = $this->MenuSection->Dish->find('list');
		$timeIntervals = $this->MenuSection->TimeInterval->find('list');
		$this->set(compact('menus', 'dishes', 'timeIntervals'));
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
		$this->MenuSection->id = $id;
		if (!$this->MenuSection->exists()) {
			throw new NotFoundException(__('Invalid menu section'));
		}
		if ($this->MenuSection->delete()) {
			$this->Session->setFlash(__('Menu section deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Menu section was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
