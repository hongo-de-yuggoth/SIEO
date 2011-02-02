<?php
class ParaclinicosController extends AppController {

	var $name = 'Paraclinicos';

	function index() {
		$this->Paraclinico->recursive = 0;
		$this->set('paraclinicos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid paraclinico', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('paraclinico', $this->Paraclinico->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Paraclinico->create();
			if ($this->Paraclinico->save($this->data)) {
				$this->Session->setFlash(__('The paraclinico has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The paraclinico could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid paraclinico', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Paraclinico->save($this->data)) {
				$this->Session->setFlash(__('The paraclinico has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The paraclinico could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Paraclinico->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for paraclinico', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Paraclinico->delete($id)) {
			$this->Session->setFlash(__('Paraclinico deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Paraclinico was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>