<?php
class CiudadesController extends AppController {

	var $name = 'Ciudades';

	function index() {
		$this->Ciudad->recursive = 0;
		$this->set('ciudades', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid ciudad', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('ciudad', $this->Ciudad->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Ciudad->create();
			if ($this->Ciudad->save($this->data)) {
				$this->Session->setFlash(__('The ciudad has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ciudad could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid ciudad', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Ciudad->save($this->data)) {
				$this->Session->setFlash(__('The ciudad has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ciudad could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Ciudad->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for ciudad', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Ciudad->delete($id)) {
			$this->Session->setFlash(__('Ciudad deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Ciudad was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>