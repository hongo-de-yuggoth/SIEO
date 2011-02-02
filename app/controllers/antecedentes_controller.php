<?php
class AntecedentesController extends AppController {

	var $name = 'Antecedentes';

	function index() {
		$this->Antecedente->recursive = 0;
		$this->set('antecedentes', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid antecedente', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('antecedente', $this->Antecedente->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Antecedente->create();
			if ($this->Antecedente->save($this->data)) {
				$this->Session->setFlash(__('The antecedente has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The antecedente could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid antecedente', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Antecedente->save($this->data)) {
				$this->Session->setFlash(__('The antecedente has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The antecedente could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Antecedente->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for antecedente', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Antecedente->delete($id)) {
			$this->Session->setFlash(__('Antecedente deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Antecedente was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>