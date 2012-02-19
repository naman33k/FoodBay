<?php
App::uses('AppController', 'Controller');
/**
 * RestaurantRatings Controller
 *
 * @property RestaurantRating $RestaurantRating
 */
class RestaurantRatingsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->RestaurantRating->recursive = 0;
		$this->set('restaurantRatings', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->RestaurantRating->id = $id;
		if (!$this->RestaurantRating->exists()) {
			throw new NotFoundException(__('Invalid restaurant rating'));
		}
		$this->set('restaurantRating', $this->RestaurantRating->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->RestaurantRating->create();
			if ($this->RestaurantRating->save($this->request->data)) {
				$this->Session->setFlash(__('The restaurant rating has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The restaurant rating could not be saved. Please, try again.'));
			}
		}
		$users = $this->RestaurantRating->User->find('list');
		$restaurants = $this->RestaurantRating->Restaurant->find('list');
		$this->set(compact('users', 'restaurants'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->RestaurantRating->id = $id;
		if (!$this->RestaurantRating->exists()) {
			throw new NotFoundException(__('Invalid restaurant rating'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->RestaurantRating->save($this->request->data)) {
				$this->Session->setFlash(__('The restaurant rating has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The restaurant rating could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->RestaurantRating->read(null, $id);
		}
		$users = $this->RestaurantRating->User->find('list');
		$restaurants = $this->RestaurantRating->Restaurant->find('list');
		$this->set(compact('users', 'restaurants'));
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
		$this->RestaurantRating->id = $id;
		if (!$this->RestaurantRating->exists()) {
			throw new NotFoundException(__('Invalid restaurant rating'));
		}
		if ($this->RestaurantRating->delete()) {
			$this->Session->setFlash(__('Restaurant rating deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Restaurant rating was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
