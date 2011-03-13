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
		$this->loadModel('Localidad');
		$this->loadModel('Estadocivil');
		$this->loadModel('Religion');
		$departamentos = $this->Departamento->find('all', array
		(
			'fields' => array
			(
				'Departamento.id',
				'UPPER(Departamento.nombre) AS nombre'
			),
			'order' => 'Departamento.nombre',
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
		$estados_civiles = $this->Estadocivil->find('all', array
		(
			'fields' => array
			(
				'Estadocivil.id',
				'Estadocivil.nombre'
			),
			'recursive' => 0
		));
		$religiones = $this->Religion->find('all', array
		(
			'fields' => array
			(
				'Religion.id',
				'Religion.nombre'
			),
			'recursive' => 0
		));
		if ( !empty($departamentos) && !empty($localidades) && !empty($estados_civiles) && !empty($religiones) )
		{
			$departamentos_options = '';
			foreach ( $departamentos as $departamento )
			{
				$departamentos_options .= '<option value="'.$departamento['Departamento']['id'].'">'.$departamento[0]['nombre'].'</option>';
			}
			$localidades_options = '';
			foreach ( $localidades as $localidad )
			{
				$localidades_options .= '<option value="'.$localidad['Localidad']['id'].'">'.mb_convert_case($localidad['Localidad']['nombre'], MB_CASE_UPPER, "UTF-8").'</option>';
			}
			$estados_civiles_options = '';
			foreach ( $estados_civiles as $estado_civil )
			{
				$estados_civiles_options .= '<option value="'.$estado_civil['Estadocivil']['id'].'">'.$estado_civil['Estadocivil']['nombre'].'</option>';
			}
			$religiones_options = '';
			foreach ( $religiones as $religion )
			{
				$religiones_options .= '<option value="'.$religion['Religion']['id'].'">'.mb_convert_case($religion['Religion']['nombre'], MB_CASE_UPPER, "UTF-8").'</option>';
			}
			$this->set('departamentos', utf8_encode($departamentos_options));
			$this->set('localidades', $localidades_options);
			$this->set('estados_civiles', utf8_encode($estados_civiles_options));
			$this->set('religiones', $religiones_options);
		}
	}
	
	//--------------------------------------------------------------------------
}
?>