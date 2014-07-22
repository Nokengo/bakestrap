<?php
App::uses('AppController', 'Controller');
/**
 * DealsProducts Controller
 *
 * @property DealsProduct $DealsProduct
 * @property PaginatorComponent $Paginator
 */
class DealsProductsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->DealsProduct->recursive = 0;
		$this->set('dealsProducts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DealsProduct->exists($id)) {
			throw new NotFoundException(__('Invalid deals product'));
		}
		$options = array('conditions' => array('DealsProduct.' . $this->DealsProduct->primaryKey => $id));
		$this->set('dealsProduct', $this->DealsProduct->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DealsProduct->create();
			if ($this->DealsProduct->save($this->request->data)) {
				$this->Session->setFlash(__('The deals product has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The deals product could not be saved. Please, try again.'));
			}
		}
		$products = $this->DealsProduct->Product->find('list');
		$users = $this->DealsProduct->User->find('list');
		$addresses = $this->DealsProduct->Address->find('list');
		$this->set(compact('products', 'users', 'addresses'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->DealsProduct->exists($id)) {
			throw new NotFoundException(__('Invalid deals product'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DealsProduct->save($this->request->data)) {
				$this->Session->setFlash(__('The deals product has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The deals product could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DealsProduct.' . $this->DealsProduct->primaryKey => $id));
			$this->request->data = $this->DealsProduct->find('first', $options);
		}
		$products = $this->DealsProduct->Product->find('list');
		$users = $this->DealsProduct->User->find('list');
		$addresses = $this->DealsProduct->Address->find('list');
		$this->set(compact('products', 'users', 'addresses'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->DealsProduct->id = $id;
		if (!$this->DealsProduct->exists()) {
			throw new NotFoundException(__('Invalid deals product'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->DealsProduct->delete()) {
			$this->Session->setFlash(__('The deals product has been deleted.'));
		} else {
			$this->Session->setFlash(__('The deals product could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
