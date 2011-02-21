<?php
class TrabajadoresController extends AppController
{
	var $name = 'Trabajadores';
	var $sexo = array('M'=>'Masculino', 'F'=>'Femenino');

	function index()
	{
		$this->Trabajador->recursive = 0;
		$this->set('trabajadores', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid trabajador', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('trabajador', $this->Trabajador->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Trabajador->create();
			if ($this->Trabajador->save($this->data)) {
				$this->Session->setFlash(__('The trabajador has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The trabajador could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid trabajador', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Trabajador->save($this->data)) {
				$this->Session->setFlash(__('The trabajador has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The trabajador could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Trabajador->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for trabajador', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Trabajador->delete($id)) {
			$this->Session->setFlash(__('Trabajador deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Trabajador was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	
	//--------------------------------------------------------------------------
	
	function buscar($tipo_doc, $numero_doc)
	{
		$this->autoLayout = false;
		$this->autoRender = false;
		$trabajador = $this->Trabajador->find('first', array
		(
			'conditions' => array
			(
				'Trabajador.tipo_doc' => $tipo_doc,
				'Trabajador.numero_doc' => $numero_doc
			),
			'fields' => array
			(
				'Trabajador.sexo',
				'Trabajador.id',
				'Trabajador.nombre',
				'Trabajador.tipo_doc',
				'Trabajador.numero_doc',
				'Empresa.nombre'
			)
		));
		if ( !empty($trabajador) )
		{
			$trabajador['Trabajador']['sexo'] = $this->sexo[$trabajador['Trabajador']['sexo']];
		
			// creamos inputs hidden
			$input_id = '<input id="id_trabajador" name="data[Trabajador][id]" type="hidden" value="'.$trabajador['Trabajador']['id'].'"/>';
			$input_nombre = '<input id="nombre_trabajador" type="hidden" value="'.mb_convert_case( $trabajador['Trabajador']['nombre'], MB_CASE_TITLE, "UTF-8").'"/>';
			$input_tipo_documento = '<input id="tipo_documento_trabajador" type="hidden" value="'.$trabajador['Trabajador']['tipo_doc'].'"/>';
			$input_numero_documento = '<input id="numero_documento_trabajador" type="hidden" value="'.$trabajador['Trabajador']['numero_doc'].'"/>';
			$input_empresa = '<input id="empresa_trabajador" type="hidden" value="'.$trabajador['Empresa']['nombre'].'"/>';
			
			$input_encontro ='<input id="encontro" type="hidden" value="true"/>';

			return	$input_id.
						$input_nombre.
						$input_tipo_documento.
						$input_numero_documento.
						$input_empresa.
						$input_encontro;
		}
		else
		{
			return '<input id="encontro" type="hidden" value="false" />';
		}
	}
	//--------------------------------------------------------------------------	
}
?>