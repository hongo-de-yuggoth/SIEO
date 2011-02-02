<?php
class RiesgosController extends AppController {

	var $name = 'Riesgos';

	function index() {
		$this->Riesgo->recursive = 0;
		$this->set('riesgos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid riesgo', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('riesgo', $this->Riesgo->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Riesgo->create();
			if ($this->Riesgo->save($this->data)) {
				$this->Session->setFlash(__('The riesgo has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The riesgo could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid riesgo', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Riesgo->save($this->data)) {
				$this->Session->setFlash(__('The riesgo has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The riesgo could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Riesgo->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for riesgo', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Riesgo->delete($id)) {
			$this->Session->setFlash(__('Riesgo deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Riesgo was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>