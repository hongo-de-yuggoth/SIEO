<?php
class Cie10Controller extends AppController {

	var $name = 'Cie10';

	function index() {
		$this->Cie10->recursive = 0;
		$this->set('cie10', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid cie10', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('cie10', $this->Cie10->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Cie10->create();
			if ($this->Cie10->save($this->data)) {
				$this->Session->setFlash(__('The cie10 has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cie10 could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid cie10', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Cie10->save($this->data)) {
				$this->Session->setFlash(__('The cie10 has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cie10 could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Cie10->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for cie10', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Cie10->delete($id)) {
			$this->Session->setFlash(__('Cie10 deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Cie10 was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>