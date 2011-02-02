<?php
class RiesgoscargoactualesController extends AppController {

	var $name = 'Riesgoscargoactuales';

	function index() {
		$this->Riesgocargoactual->recursive = 0;
		$this->set('riesgoscargoactuales', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid riesgocargoactual', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('riesgocargoactual', $this->Riesgocargoactual->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Riesgocargoactual->create();
			if ($this->Riesgocargoactual->save($this->data)) {
				$this->Session->setFlash(__('The riesgocargoactual has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The riesgocargoactual could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid riesgocargoactual', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Riesgocargoactual->save($this->data)) {
				$this->Session->setFlash(__('The riesgocargoactual has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The riesgocargoactual could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Riesgocargoactual->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for riesgocargoactual', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Riesgocargoactual->delete($id)) {
			$this->Session->setFlash(__('Riesgocargoactual deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Riesgocargoactual was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>