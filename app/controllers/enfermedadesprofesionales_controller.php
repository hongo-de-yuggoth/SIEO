<?php
class EnfermedadesprofesionalesController extends AppController {

	var $name = 'Enfermedadesprofesionales';

	function index() {
		$this->Enfermedadprofesional->recursive = 0;
		$this->set('enfermedadesprofesionales', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid enfermedadprofesional', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('enfermedadprofesional', $this->Enfermedadprofesional->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Enfermedadprofesional->create();
			if ($this->Enfermedadprofesional->save($this->data)) {
				$this->Session->setFlash(__('The enfermedadprofesional has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The enfermedadprofesional could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid enfermedadprofesional', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Enfermedadprofesional->save($this->data)) {
				$this->Session->setFlash(__('The enfermedadprofesional has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The enfermedadprofesional could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Enfermedadprofesional->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for enfermedadprofesional', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Enfermedadprofesional->delete($id)) {
			$this->Session->setFlash(__('Enfermedadprofesional deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Enfermedadprofesional was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>