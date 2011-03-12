<?php
class CiudadesController extends AppController
{
	var $name = 'Ciudades';

	//--------------------------------------------------------------------------
	
	function index() {
		$this->Ciudad->recursive = 0;
		$this->set('ciudades', $this->paginate());
	}
	
	//--------------------------------------------------------------------------

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid ciudad', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('ciudad', $this->Ciudad->read(null, $id));
	}
	
	//--------------------------------------------------------------------------

	function add() {
		if (!empty($this->data)) {
			$this->Ciudad->create();
			if ($this->Ciudad->save($this->data)) {
				$this->Session->setFlash(__('The ciudad has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ciudad could not be saved. Please, try again.', true));
			}
		}
	}
	
	//--------------------------------------------------------------------------

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid ciudad', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Ciudad->save($this->data)) {
				$this->Session->setFlash(__('The ciudad has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ciudad could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Ciudad->read(null, $id);
		}
	}
	
	//--------------------------------------------------------------------------

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for ciudad', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Ciudad->delete($id)) {
			$this->Session->setFlash(__('Ciudad deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Ciudad was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	
	//--------------------------------------------------------------------------
	
	function crear_select($id_departamento)
	{
		$this->autoLayout = false;
		$this->autoRender = false;
		
		// Validamos que no acepte el id de "Bogotá D.C."
		if ( $id_departamento == '33' )
		{
			return json_encode(array('resultado'=>false));
		}
		else
		{
			$ciudades = $this->Ciudad->find('all', array
			(
				'fields' => array
				(
					'Ciudad.id',
					'Ciudad.nombre'
				),
				'conditions' => array
				(
					'Ciudad.id_depto' => $id_departamento
				),
				'order' => 'Ciudad.nombre',
				'recursive' => 0
			));
			if ( !empty($ciudades) )
			{
				$ciudades_options = '';
				foreach ( $ciudades as $ciudad )
				{
					$ciudades_options .= '<option value="'.$ciudad['Ciudad']['id'].'">'.$ciudad['Ciudad']['nombre'].'</option>';
				}
				return json_encode(array
				(
					'options' => utf8_encode($ciudades_options),
					'resultado' => true
				));
			}
			else
			{
				return json_encode(array('resultado'=>false));
			}
		}
	}
	
	//--------------------------------------------------------------------------
}
?>