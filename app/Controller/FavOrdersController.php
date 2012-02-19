<?php
App::uses('AppController', 'Controller');
/**
 * FavOrders Controller
 *
 * @property FavOrder $FavOrder
 */
class FavOrdersController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->FavOrder->recursive = 0;
		$this->set('favOrders', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->FavOrder->id = $id;
		if (!$this->FavOrder->exists()) {
			throw new NotFoundException(__('Invalid fav order'));
		}
		$this->set('favOrder', $this->FavOrder->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FavOrder->create();
			if ($this->FavOrder->save($this->request->data)) {
				$this->Session->setFlash(__('The fav order has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fav order could not be saved. Please, try again.'));
			}
		}
		$users = $this->FavOrder->User->find('list');
		$orders = $this->FavOrder->Order->find('list');
		$this->set(compact('users', 'orders'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->FavOrder->id = $id;
		if (!$this->FavOrder->exists()) {
			throw new NotFoundException(__('Invalid fav order'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->FavOrder->save($this->request->data)) {
				$this->Session->setFlash(__('The fav order has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fav order could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->FavOrder->read(null, $id);
		}
		$users = $this->FavOrder->User->find('list');
		$orders = $this->FavOrder->Order->find('list');
		$this->set(compact('users', 'orders'));
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
		$this->FavOrder->id = $id;
		if (!$this->FavOrder->exists()) {
			throw new NotFoundException(__('Invalid fav order'));
		}
		if ($this->FavOrder->delete()) {
			$this->Session->setFlash(__('Fav order deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Fav order was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
