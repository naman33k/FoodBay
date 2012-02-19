<?php
App::uses('AppController', 'Controller');
/**
 * Cuisines Controller
 *
 * @property Cuisine $Cuisine
 */
class CuisinesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Cuisine->recursive = 0;
		$this->set('cuisines', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Cuisine->id = $id;
		if (!$this->Cuisine->exists()) {
			throw new NotFoundException(__('Invalid cuisine'));
		}
		$this->set('cuisine', $this->Cuisine->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Cuisine->create();
			if ($this->Cuisine->save($this->request->data)) {
				$this->Session->setFlash(__('The cuisine has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cuisine could not be saved. Please, try again.'));
			}
		}
		$restaurants = $this->Cuisine->Restaurant->find('list');
		$users = $this->Cuisine->User->find('list');
		$this->set(compact('restaurants', 'users'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Cuisine->id = $id;
		if (!$this->Cuisine->exists()) {
			throw new NotFoundException(__('Invalid cuisine'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Cuisine->save($this->request->data)) {
				$this->Session->setFlash(__('The cuisine has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cuisine could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Cuisine->read(null, $id);
		}
		$restaurants = $this->Cuisine->Restaurant->find('list');
		$users = $this->Cuisine->User->find('list');
		$this->set(compact('restaurants', 'users'));
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
		$this->Cuisine->id = $id;
		if (!$this->Cuisine->exists()) {
			throw new NotFoundException(__('Invalid cuisine'));
		}
		if ($this->Cuisine->delete()) {
			$this->Session->setFlash(__('Cuisine deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Cuisine was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
