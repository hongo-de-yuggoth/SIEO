<?php
class LocalidadesController extends AppController {

	var $name = 'Localidades';

	function index() {
		$this->Localidad->recursive = 0;
		$this->set('localidades', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid localidad', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('localidad', $this->Localidad->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Localidad->create();
			if ($this->Localidad->save($this->data)) {
				$this->Session->setFlash(__('The localidad has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The localidad could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid localidad', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Localidad->save($this->data)) {
				$this->Session->setFlash(__('The localidad has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The localidad could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Localidad->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for localidad', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Localidad->delete($id)) {
			$this->Session->setFlash(__('Localidad deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Localidad was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>