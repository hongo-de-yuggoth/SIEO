<?php
class ImpresionesdiagnosticasController extends AppController {

	var $name = 'Impresionesdiagnosticas';

	function index() {
		$this->Impresiondiagnostica->recursive = 0;
		$this->set('impresionesdiagnosticas', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid impresiondiagnostica', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('impresiondiagnostica', $this->Impresiondiagnostica->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Impresiondiagnostica->create();
			if ($this->Impresiondiagnostica->save($this->data)) {
				$this->Session->setFlash(__('The impresiondiagnostica has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The impresiondiagnostica could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid impresiondiagnostica', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Impresiondiagnostica->save($this->data)) {
				$this->Session->setFlash(__('The impresiondiagnostica has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The impresiondiagnostica could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Impresiondiagnostica->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for impresiondiagnostica', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Impresiondiagnostica->delete($id)) {
			$this->Session->setFlash(__('Impresiondiagnostica deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Impresiondiagnostica was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>