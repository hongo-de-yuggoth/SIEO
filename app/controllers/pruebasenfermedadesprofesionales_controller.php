<?php
class PruebasenfermedadesprofesionalesController extends AppController {

	var $name = 'Pruebasenfermedadesprofesionales';

	function index() {
		$this->Pruebaenfermedadprofesional->recursive = 0;
		$this->set('pruebasenfermedadesprofesionales', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid pruebaenfermedadprofesional', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('pruebaenfermedadprofesional', $this->Pruebaenfermedadprofesional->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Pruebaenfermedadprofesional->create();
			if ($this->Pruebaenfermedadprofesional->save($this->data)) {
				$this->Session->setFlash(__('The pruebaenfermedadprofesional has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pruebaenfermedadprofesional could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid pruebaenfermedadprofesional', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Pruebaenfermedadprofesional->save($this->data)) {
				$this->Session->setFlash(__('The pruebaenfermedadprofesional has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pruebaenfermedadprofesional could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Pruebaenfermedadprofesional->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for pruebaenfermedadprofesional', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Pruebaenfermedadprofesional->delete($id)) {
			$this->Session->setFlash(__('Pruebaenfermedadprofesional deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Pruebaenfermedadprofesional was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>