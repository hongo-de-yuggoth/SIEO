<?php
class RecomendacionesController extends AppController {

	var $name = 'Recomendaciones';

	function index() {
		$this->Recomendacion->recursive = 0;
		$this->set('recomendaciones', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid recomendacion', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('recomendacion', $this->Recomendacion->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Recomendacion->create();
			if ($this->Recomendacion->save($this->data)) {
				$this->Session->setFlash(__('The recomendacion has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The recomendacion could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid recomendacion', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Recomendacion->save($this->data)) {
				$this->Session->setFlash(__('The recomendacion has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The recomendacion could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Recomendacion->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for recomendacion', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Recomendacion->delete($id)) {
			$this->Session->setFlash(__('Recomendacion deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Recomendacion was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>