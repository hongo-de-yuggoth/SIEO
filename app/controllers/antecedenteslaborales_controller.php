<?php
class AntecedenteslaboralesController extends AppController {

	var $name = 'Antecedenteslaborales';

	function index() {
		$this->Antecedentelaboral->recursive = 0;
		$this->set('antecedenteslaborales', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid antecedentelaboral', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('antecedentelaboral', $this->Antecedentelaboral->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Antecedentelaboral->create();
			if ($this->Antecedentelaboral->save($this->data)) {
				$this->Session->setFlash(__('The antecedentelaboral has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The antecedentelaboral could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid antecedentelaboral', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Antecedentelaboral->save($this->data)) {
				$this->Session->setFlash(__('The antecedentelaboral has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The antecedentelaboral could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Antecedentelaboral->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for antecedentelaboral', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Antecedentelaboral->delete($id)) {
			$this->Session->setFlash(__('Antecedentelaboral deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Antecedentelaboral was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>