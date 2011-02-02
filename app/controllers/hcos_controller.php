<?php
class HcosController extends AppController {

	var $name = 'Hcos';

	function index() {
		$this->Hco->recursive = 0;
		$this->set('hcos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid hco', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('hco', $this->Hco->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Hco->create();
			if ($this->Hco->save($this->data)) {
				$this->Session->setFlash(__('The hco has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hco could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Hco->User->find('list');
		$this->set(compact('users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid hco', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Hco->save($this->data)) {
				$this->Session->setFlash(__('The hco has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hco could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Hco->read(null, $id);
		}
		$users = $this->Hco->User->find('list');
		$this->set(compact('users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for hco', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Hco->delete($id)) {
			$this->Session->setFlash(__('Hco deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Hco was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>