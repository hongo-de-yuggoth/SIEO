<?php
class ListallegadasController extends AppController {

	var $name = 'Listallegadas';

	function index() {
		$this->Listallegada->recursive = 0;
		$this->set('listallegadas', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid listallegada', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('listallegada', $this->Listallegada->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Listallegada->create();
			if ($this->Listallegada->save($this->data)) {
				$this->Session->setFlash(__('The listallegada has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The listallegada could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid listallegada', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Listallegada->save($this->data)) {
				$this->Session->setFlash(__('The listallegada has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The listallegada could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Listallegada->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for listallegada', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Listallegada->delete($id)) {
			$this->Session->setFlash(__('Listallegada deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Listallegada was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>