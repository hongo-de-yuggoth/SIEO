<?php
class ExamenesfisicosController extends AppController {

	var $name = 'Examenesfisicos';

	function index() {
		$this->Examenfisico->recursive = 0;
		$this->set('examenesfisicos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid examenfisico', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('examenfisico', $this->Examenfisico->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Examenfisico->create();
			if ($this->Examenfisico->save($this->data)) {
				$this->Session->setFlash(__('The examenfisico has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The examenfisico could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid examenfisico', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Examenfisico->save($this->data)) {
				$this->Session->setFlash(__('The examenfisico has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The examenfisico could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Examenfisico->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for examenfisico', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Examenfisico->delete($id)) {
			$this->Session->setFlash(__('Examenfisico deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Examenfisico was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>