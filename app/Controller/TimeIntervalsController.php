<?php
App::uses('AppController', 'Controller');
/**
 * TimeIntervals Controller
 *
 * @property TimeInterval $TimeInterval
 */
class TimeIntervalsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->TimeInterval->recursive = 0;
		$this->set('timeIntervals', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->TimeInterval->id = $id;
		if (!$this->TimeInterval->exists()) {
			throw new NotFoundException(__('Invalid time interval'));
		}
		$this->set('timeInterval', $this->TimeInterval->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TimeInterval->create();
			if ($this->TimeInterval->save($this->request->data)) {
				$this->Session->setFlash(__('The time interval has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The time interval could not be saved. Please, try again.'));
			}
		}
		$dishes = $this->TimeInterval->Dish->find('list');
		$menuSections = $this->TimeInterval->MenuSection->find('list');
		$restaurantServices = $this->TimeInterval->RestaurantService->find('list');
		$this->set(compact('dishes', 'menuSections', 'restaurantServices'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->TimeInterval->id = $id;
		if (!$this->TimeInterval->exists()) {
			throw new NotFoundException(__('Invalid time interval'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->TimeInterval->save($this->request->data)) {
				$this->Session->setFlash(__('The time interval has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The time interval could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->TimeInterval->read(null, $id);
		}
		$dishes = $this->TimeInterval->Dish->find('list');
		$menuSections = $this->TimeInterval->MenuSection->find('list');
		$restaurantServices = $this->TimeInterval->RestaurantService->find('list');
		$this->set(compact('dishes', 'menuSections', 'restaurantServices'));
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
		$this->TimeInterval->id = $id;
		if (!$this->TimeInterval->exists()) {
			throw new NotFoundException(__('Invalid time interval'));
		}
		if ($this->TimeInterval->delete()) {
			$this->Session->setFlash(__('Time interval deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Time interval was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
