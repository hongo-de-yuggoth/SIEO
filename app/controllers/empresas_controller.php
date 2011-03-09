<?php
class EmpresasController extends AppController
{
	var $name = 'Empresas';

	function index() {
		$this->Empresa->recursive = 0;
		$this->set('empresas', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid empresa', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('empresa', $this->Empresa->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Empresa->create();
			if ($this->Empresa->save($this->data)) {
				$this->Session->setFlash(__('The empresa has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The empresa could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid empresa', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Empresa->save($this->data)) {
				$this->Session->setFlash(__('The empresa has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The empresa could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Empresa->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for empresa', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Empresa->delete($id)) {
			$this->Session->setFlash(__('Empresa deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Empresa was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	
	//--------------------------------------------------------------------------
	
	function datos($id_empresa)
	{
		$this->autoLayout = false;
		$this->autoRender = false;
		$empresa = $this->Empresa->find('first', array
		(
			'conditions' => array('Empresa.id' => $id_empresa),
			'fields' => array
			(
				'Empresa.arp',
				'Ciudad.nombre',
				'Departamento.nombre'
			)
		));
		if ( !empty($empresa) )
		{
			return json_encode(array
			(
				'resultado' => true,
				'ciudad' => $empresa['Ciudad']['nombre'],
				'departamento' => $empresa['Departamento']['nombre'],
				'arp' => $empresa['Empresa']['arp']
			));
		}
		return json_encode(array('resultado' => false));
	}
}
?>