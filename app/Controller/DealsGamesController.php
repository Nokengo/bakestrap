<?php
App::uses('AppController', 'Controller');
/**
 * DealsGames Controller
 *
 * @property DealsGame $DealsGame
 * @property PaginatorComponent $Paginator
 */
class DealsGamesController extends AppController {

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
		$this->DealsGame->recursive = 0;
		$this->set('dealsGames', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DealsGame->exists($id)) {
			throw new NotFoundException(__('Invalid deals game'));
		}
		$options = array('conditions' => array('DealsGame.' . $this->DealsGame->primaryKey => $id));
		$this->set('dealsGame', $this->DealsGame->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DealsGame->create();
			if ($this->DealsGame->save($this->request->data)) {
				$this->Session->setFlash(__('The deals game has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The deals game could not be saved. Please, try again.'));
			}
		}
		$games = $this->DealsGame->Game->find('list');
		$users = $this->DealsGame->User->find('list');
		$tokens = $this->DealsGame->Token->find('list');
		$this->set(compact('games', 'users', 'tokens'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->DealsGame->exists($id)) {
			throw new NotFoundException(__('Invalid deals game'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DealsGame->save($this->request->data)) {
				$this->Session->setFlash(__('The deals game has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The deals game could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DealsGame.' . $this->DealsGame->primaryKey => $id));
			$this->request->data = $this->DealsGame->find('first', $options);
		}
		$games = $this->DealsGame->Game->find('list');
		$users = $this->DealsGame->User->find('list');
		$tokens = $this->DealsGame->Token->find('list');
		$this->set(compact('games', 'users', 'tokens'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->DealsGame->id = $id;
		if (!$this->DealsGame->exists()) {
			throw new NotFoundException(__('Invalid deals game'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->DealsGame->delete()) {
			$this->Session->setFlash(__('The deals game has been deleted.'));
		} else {
			$this->Session->setFlash(__('The deals game could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
