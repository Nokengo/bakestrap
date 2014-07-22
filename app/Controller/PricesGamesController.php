<?php
App::uses('AppController', 'Controller');
/**
 * PricesGames Controller
 *
 * @property PricesGame $PricesGame
 * @property PaginatorComponent $Paginator
 */
class PricesGamesController extends AppController {

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
		$this->PricesGame->recursive = 0;
		$this->set('pricesGames', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PricesGame->exists($id)) {
			throw new NotFoundException(__('Invalid prices game'));
		}
		$options = array('conditions' => array('PricesGame.' . $this->PricesGame->primaryKey => $id));
		$this->set('pricesGame', $this->PricesGame->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PricesGame->create();
			if ($this->PricesGame->save($this->request->data)) {
				$this->Session->setFlash(__('The prices game has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The prices game could not be saved. Please, try again.'));
			}
		}
		$games = $this->PricesGame->Game->find('list');
		$this->set(compact('games'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->PricesGame->exists($id)) {
			throw new NotFoundException(__('Invalid prices game'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PricesGame->save($this->request->data)) {
				$this->Session->setFlash(__('The prices game has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The prices game could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PricesGame.' . $this->PricesGame->primaryKey => $id));
			$this->request->data = $this->PricesGame->find('first', $options);
		}
		$games = $this->PricesGame->Game->find('list');
		$this->set(compact('games'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->PricesGame->id = $id;
		if (!$this->PricesGame->exists()) {
			throw new NotFoundException(__('Invalid prices game'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->PricesGame->delete()) {
			$this->Session->setFlash(__('The prices game has been deleted.'));
		} else {
			$this->Session->setFlash(__('The prices game could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
