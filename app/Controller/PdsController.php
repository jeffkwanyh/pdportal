<?php

class PdsController extends AppController {
    public $helpers = array('Html', 'Form', 'Session');
    
    public function index() {
    	$pds = $this->set('pds', $this->Pd->find('all'));
        //pr($pds);
    }
    
    public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $pd = $this->Pd->findById($id);
        if (!$pd) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->set('pd', $pd);
    }
    
    public function add() {
        if ($this->request->is('post')) {
            $this->Pd->create();
            if ($this->Pd->save($this->request->data)) {
                $this->Session->setFlash(__('Your PD has been saved.'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('Unable to add your PD.'));
            }
        }
    }
    
    public function edit($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }
    
        $pd = $this->Pd->findById($id);
        if (!$pd) {
            throw new NotFoundException(__('Invalid post'));
        }
    
        if ($this->request->is('post') || $this->request->is('put')) {
            $this->Pd->id = $id;
            if ($this->Pd->save($this->request->data)) {
                $this->Session->setFlash(__('Your post has been updated.'));
                //$this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('Unable to update your post.'));
            }
        }
    
        if (!$this->request->data) {
            $this->request->data = $pd;
        }
    }
    
    public function delete($id) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }
    
        if ($this->Pd->delete($id)) {
            $this->Session->setFlash(__('The PD has been deleted.', $id));
            $this->redirect(array('action' => 'index'));
        }
    }
    
}