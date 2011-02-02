<?php
class TiposriesgosController extends AppController {

	var $name = 'Tiposriesgos';

	function index() {
		$this->Tiporiesgo->recursive = 0;
		$this->set('tiposriesgos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid tiporiesgo', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('tiporiesgo', $this->Tiporiesgo->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Tiporiesgo->create();
			if ($this->Tiporiesgo->save($this->data)) {
				$this->Session->setFlash(__('The tiporiesgo has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tiporiesgo could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid tiporiesgo', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Tiporiesgo->save($this->data)) {
				$this->Session->setFlash(__('The tiporiesgo has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tiporiesgo could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Tiporiesgo->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for tiporiesgo', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Tiporiesgo->delete($id)) {
			$this->Session->setFlash(__('Tiporiesgo deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Tiporiesgo was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>