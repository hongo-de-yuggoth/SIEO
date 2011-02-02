<?php
class ReligionesController extends AppController {

	var $name = 'Religiones';

	function index() {
		$this->Religion->recursive = 0;
		$this->set('religiones', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid religion', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('religion', $this->Religion->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Religion->create();
			if ($this->Religion->save($this->data)) {
				$this->Session->setFlash(__('The religion has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The religion could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid religion', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Religion->save($this->data)) {
				$this->Session->setFlash(__('The religion has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The religion could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Religion->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for religion', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Religion->delete($id)) {
			$this->Session->setFlash(__('Religion deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Religion was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>