<?php
App::uses('AppController', 'Controller');
/**
 * Pds Controller
 *
 * @property Pd $Pd
 */
class PdsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Pd->recursive = 0;
		$this->set('pds', $this->paginate());
        //$this->set('pds', $pd);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Pd->exists($id)) {
			throw new NotFoundException(__('Invalid pd'));
		}
		$options = array('conditions' => array('Pd.' . $this->Pd->primaryKey => $id));
		$this->set('pd', $this->Pd->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Pd->create();
			if ($this->Pd->save($this->request->data)) {
				$this->Session->setFlash(__('The pd has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pd could not be saved. Please, try again.'));
			}
		}
		$users = $this->Pd->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Pd->exists($id)) {
			throw new NotFoundException(__('Invalid pd'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Pd->save($this->request->data)) {
				$this->Session->setFlash(__('The pd has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pd could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Pd.' . $this->Pd->primaryKey => $id));
			$this->request->data = $this->Pd->find('first', $options);
		}
		$users = $this->Pd->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Pd->id = $id;
		if (!$this->Pd->exists()) {
			throw new NotFoundException(__('Invalid pd'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Pd->delete()) {
			$this->Session->setFlash(__('Pd deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Pd was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
