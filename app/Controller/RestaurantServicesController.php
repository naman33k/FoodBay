<?php
App::uses('AppController', 'Controller');
/**
 * RestaurantServices Controller
 *
 * @property RestaurantService $RestaurantService
 */
class RestaurantServicesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->RestaurantService->recursive = 0;
		$this->set('restaurantServices', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->RestaurantService->id = $id;
		if (!$this->RestaurantService->exists()) {
			throw new NotFoundException(__('Invalid restaurant service'));
		}
		$this->set('restaurantService', $this->RestaurantService->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->RestaurantService->create();
			if ($this->RestaurantService->save($this->request->data)) {
				$this->Session->setFlash(__('The restaurant service has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The restaurant service could not be saved. Please, try again.'));
			}
		}
		$locations = $this->RestaurantService->Location->find('list');
		$restaurants = $this->RestaurantService->Restaurant->find('list');
		$timeIntervals = $this->RestaurantService->TimeInterval->find('list');
		$this->set(compact('locations', 'restaurants', 'timeIntervals'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->RestaurantService->id = $id;
		if (!$this->RestaurantService->exists()) {
			throw new NotFoundException(__('Invalid restaurant service'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->RestaurantService->save($this->request->data)) {
				$this->Session->setFlash(__('The restaurant service has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The restaurant service could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->RestaurantService->read(null, $id);
		}
		$locations = $this->RestaurantService->Location->find('list');
		$restaurants = $this->RestaurantService->Restaurant->find('list');
		$timeIntervals = $this->RestaurantService->TimeInterval->find('list');
		$this->set(compact('locations', 'restaurants', 'timeIntervals'));
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
		$this->RestaurantService->id = $id;
		if (!$this->RestaurantService->exists()) {
			throw new NotFoundException(__('Invalid restaurant service'));
		}
		if ($this->RestaurantService->delete()) {
			$this->Session->setFlash(__('Restaurant service deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Restaurant service was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
