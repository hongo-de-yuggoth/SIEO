<?php
class HcosController extends AppController
{
	var $name = 'Hcos';

	function index() {
		$this->Hco->recursive = 0;
		$this->set('hcos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid hco', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('hco', $this->Hco->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Hco->create();
			if ($this->Hco->save($this->data)) {
				$this->Session->setFlash(__('The hco has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hco could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Hco->User->find('list');
		$this->set(compact('users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid hco', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Hco->save($this->data)) {
				$this->Session->setFlash(__('The hco has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hco could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Hco->read(null, $id);
		}
		$users = $this->Hco->User->find('list');
		$this->set(compact('users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for hco', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Hco->delete($id)) {
			$this->Session->setFlash(__('Hco deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Hco was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	
	//--------------------------------------------------------------------------
	
	function crear()
	{
		$this->loadModel('Departamento');
		$this->loadModel('Ciudad');
		$this->loadModel('Localidad');
		$departamentos = $this->Departamento->find('all', array
		(
			'fields' => array
			(
				'Departamento.id',
				'Departamento.nombre'
			),
			'order' => 'Departamento.nombre',
			'recursive' => 0
		));
		$ciudades = $this->Ciudad->find('all', array
		(
			'fields' => array
			(
				'Ciudad.id',
				'Ciudad.nombre'
			),
			'conditions' => array
			(
				'Ciudad.id_depto' => $departamentos[0]['Departamento']['id']
			),
			'order' => 'Ciudad.nombre',
			'recursive' => 0
		));
		$localidades = $this->Localidad->find('all', array
		(
			'fields' => array
			(
				'Localidad.id',
				'Localidad.nombre'
			),
			'order' => 'Localidad.nombre',
			'recursive' => 0
		));
		if ( !empty($departamentos) && !empty($ciudades) && !empty($localidades) )
		{
			$departamentos_options = '';
			foreach ( $departamentos as $departamento )
			{
				$departamentos_options .= '<option value="'.$departamento['Departamento']['id'].'">'.$departamento['Departamento']['nombre'].'</option>';
			}
			
			$ciudades_options = '';
			foreach ( $ciudades as $ciudad )
			{
				$ciudades_options .= '<option value="'.$ciudad['Ciudad']['id'].'">'.$ciudad['Ciudad']['nombre'].'</option>';
			}
			
			$localidades_options = '';
			foreach ( $localidades as $localidad )
			{
				$localidades_options .= '<option value="'.$localidad['Localidad']['id'].'">'.$localidad['Localidad']['nombre'].'</option>';
			}
			
			$this->set('departamentos', utf8_encode($departamentos_options));
			$this->set('ciudades', utf8_encode($ciudades_options));
			$this->set('localidades', $localidades_options);
		}
	}
	
	//--------------------------------------------------------------------------
}
?>