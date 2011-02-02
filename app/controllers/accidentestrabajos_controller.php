<?php
class AccidentestrabajosController extends AppController {

	var $name = 'Accidentestrabajos';

	function index() {
		$this->Accidentetrabajo->recursive = 0;
		$this->set('accidentestrabajos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid accidentetrabajo', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('accidentetrabajo', $this->Accidentetrabajo->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Accidentetrabajo->create();
			if ($this->Accidentetrabajo->save($this->data)) {
				$this->Session->setFlash(__('The accidentetrabajo has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The accidentetrabajo could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid accidentetrabajo', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Accidentetrabajo->save($this->data)) {
				$this->Session->setFlash(__('The accidentetrabajo has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The accidentetrabajo could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Accidentetrabajo->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for accidentetrabajo', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Accidentetrabajo->delete($id)) {
			$this->Session->setFlash(__('Accidentetrabajo deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Accidentetrabajo was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>