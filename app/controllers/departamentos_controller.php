<?php
class DepartamentosController extends AppController {

	var $name = 'Departamentos';

	function index() {
		$this->Departamento->recursive = 0;
		$this->set('departamentos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid departamento', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('departamento', $this->Departamento->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Departamento->create();
			if ($this->Departamento->save($this->data)) {
				$this->Session->setFlash(__('The departamento has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The departamento could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid departamento', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Departamento->save($this->data)) {
				$this->Session->setFlash(__('The departamento has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The departamento could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Departamento->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for departamento', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Departamento->delete($id)) {
			$this->Session->setFlash(__('Departamento deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Departamento was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>