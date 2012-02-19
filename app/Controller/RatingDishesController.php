<?php
App::uses('AppController', 'Controller');
/**
 * RatingDishes Controller
 *
 * @property RatingDish $RatingDish
 */
class RatingDishesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->RatingDish->recursive = 0;
		$this->set('ratingDishes', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->RatingDish->id = $id;
		if (!$this->RatingDish->exists()) {
			throw new NotFoundException(__('Invalid rating dish'));
		}
		$this->set('ratingDish', $this->RatingDish->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->RatingDish->create();
			if ($this->RatingDish->save($this->request->data)) {
				$this->Session->setFlash(__('The rating dish has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rating dish could not be saved. Please, try again.'));
			}
		}
		$users = $this->RatingDish->User->find('list');
		$dishes = $this->RatingDish->Dish->find('list');
		$this->set(compact('users', 'dishes'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->RatingDish->id = $id;
		if (!$this->RatingDish->exists()) {
			throw new NotFoundException(__('Invalid rating dish'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->RatingDish->save($this->request->data)) {
				$this->Session->setFlash(__('The rating dish has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rating dish could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->RatingDish->read(null, $id);
		}
		$users = $this->RatingDish->User->find('list');
		$dishes = $this->RatingDish->Dish->find('list');
		$this->set(compact('users', 'dishes'));
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
		$this->RatingDish->id = $id;
		if (!$this->RatingDish->exists()) {
			throw new NotFoundException(__('Invalid rating dish'));
		}
		if ($this->RatingDish->delete()) {
			$this->Session->setFlash(__('Rating dish deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Rating dish was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
