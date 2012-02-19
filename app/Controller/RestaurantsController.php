<?php
App::uses('AppController', 'Controller');
/**
 * Restaurants Controller
 *
 * @property Restaurant $Restaurant
 */
class RestaurantsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Restaurant->recursive = 0;
		$this->set('restaurants', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Restaurant->id = $id;
		if (!$this->Restaurant->exists()) {
			throw new NotFoundException(__('Invalid restaurant'));
		}
		$this->set('restaurant', $this->Restaurant->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Restaurant->create();
			if ($this->Restaurant->save($this->request->data)) {
				$this->Session->setFlash(__('The restaurant has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The restaurant could not be saved. Please, try again.'));
			}
		}
		$locations = $this->Restaurant->Location->find('list');
		$cuisines = $this->Restaurant->Cuisine->find('list');
		$this->set(compact('locations', 'cuisines'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Restaurant->id = $id;
		if (!$this->Restaurant->exists()) {
			throw new NotFoundException(__('Invalid restaurant'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Restaurant->save($this->request->data)) {
				$this->Session->setFlash(__('The restaurant has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The restaurant could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Restaurant->read(null, $id);
		}
		$locations = $this->Restaurant->Location->find('list');
		$cuisines = $this->Restaurant->Cuisine->find('list');
		$this->set(compact('locations', 'cuisines'));
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
		$this->Restaurant->id = $id;
		if (!$this->Restaurant->exists()) {
			throw new NotFoundException(__('Invalid restaurant'));
		}
		if ($this->Restaurant->delete()) {
			$this->Session->setFlash(__('Restaurant deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Restaurant was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	
	public function makeorder($id = null){
		$this->Restaurant->id = $id;
		if (!$this->Restaurant->exists()) {
			throw new NotFoundException(__('Invalid restaurant'));
		}
		$this->Restaurant->Behaviors->load('Containable');
		// Fetch Menus
		// I am kind of assuming that there is only one active menu per restaurant
		// Will put this check using an active field in the menu
		
		$bigArray = $this->Restaurant->find('all', array('conditions'=>array('Restaurant.id'=>$id),'contain' => array('Menu' => array('MenuSection'=>array('Dish'=>array('TimeInterval','DishRating'))))));
		$this->set('restaurant',$bigArray);
		
		
	}
}
