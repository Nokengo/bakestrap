<?php
App::uses('AppController', 'Controller');
/**
 * DevCompanies Controller
 *
 * @property DevCompany $DevCompany
 * @property PaginatorComponent $Paginator
 */
class DevCompaniesController extends AppController {

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
		$this->DevCompany->recursive = 0;
		$this->set('devCompanies', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DevCompany->exists($id)) {
			throw new NotFoundException(__('Invalid dev company'));
		}
		$options = array('conditions' => array('DevCompany.' . $this->DevCompany->primaryKey => $id));
		$this->set('devCompany', $this->DevCompany->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DevCompany->create();
			if ($this->DevCompany->save($this->request->data)) {
				$this->Session->setFlash(__('The dev company has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dev company could not be saved. Please, try again.'));
			}
		}
		$devs = $this->DevCompany->Dev->find('list');
		$companies = $this->DevCompany->Company->find('list');
		$this->set(compact('devs', 'companies'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->DevCompany->exists($id)) {
			throw new NotFoundException(__('Invalid dev company'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DevCompany->save($this->request->data)) {
				$this->Session->setFlash(__('The dev company has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dev company could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DevCompany.' . $this->DevCompany->primaryKey => $id));
			$this->request->data = $this->DevCompany->find('first', $options);
		}
		$devs = $this->DevCompany->Dev->find('list');
		$companies = $this->DevCompany->Company->find('list');
		$this->set(compact('devs', 'companies'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->DevCompany->id = $id;
		if (!$this->DevCompany->exists()) {
			throw new NotFoundException(__('Invalid dev company'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->DevCompany->delete()) {
			$this->Session->setFlash(__('The dev company has been deleted.'));
		} else {
			$this->Session->setFlash(__('The dev company could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
