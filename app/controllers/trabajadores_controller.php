<?php
class TrabajadoresController extends AppController {

	var $name = 'Trabajadores';

	function index() {
		$this->Trabajador->recursive = 0;
		$this->set('trabajadores', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid trabajador', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('trabajador', $this->Trabajador->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Trabajador->create();
			if ($this->Trabajador->save($this->data)) {
				$this->Session->setFlash(__('The trabajador has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The trabajador could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid trabajador', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Trabajador->save($this->data)) {
				$this->Session->setFlash(__('The trabajador has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The trabajador could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Trabajador->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for trabajador', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Trabajador->delete($id)) {
			$this->Session->setFlash(__('Trabajador deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Trabajador was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>