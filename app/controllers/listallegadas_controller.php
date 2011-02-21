<?php
class ListallegadasController extends AppController
{
	var $name = 'Listallegadas';

	//--------------------------------------------------------------------------
	
	function index()
	{
		$listado = $this->Listallegada->find('all', array
		(
			'fields' => array
			(
				'id',
				'id_trabajador',
				'Trabajador.nombre',
				'TIME(Listallegada.created) AS hora'
			),
			'recursive' => 1
		));
		$this->set('listado', $listado);
	}

	//--------------------------------------------------------------------------
	
	function view($id = null)
	{
		if (!$id) {
			$this->Session->setFlash(__('Invalid listallegada', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('listallegada', $this->Listallegada->read(null, $id));
	}
	
	//--------------------------------------------------------------------------
	
	function add($id_trabajador)
	{
		$this->autoLayout = false;
		$this->autoRender = false;
		$this->loadModel('Trabajador');
		$datos_json = array();
		if ( !$this->existe($id_trabajador) )
		{
			$datos_json['existe'] = false;
			$this->Listallegada->create();
			if ( $this->Listallegada->save(array('Listallegada'=>array('id_trabajador'=>$id_trabajador))) )
			{
				$id_listallegada = $this->Listallegada->getInsertID();
				$trabajador = $this->Trabajador->find('first', array
				(
					'conditions' => array
					(
						'Trabajador.id' => $id_trabajador
					),
					'fields' => array('nombre')
				));
				$lista = $this->Listallegada->find('first', array
				(
					'conditions' => array
					(
						'Listallegada.id' => $id_listallegada
					),
					'fields' => array('TIME(Listallegada.created) as hora')
				));
				$datos_json['resultado'] = true;
				$datos_json['id'] = $id_listallegada;
				$datos_json['nombre'] = $trabajador['Trabajador']['nombre'];
				$datos_json['hora'] = $lista[0]['hora'];
			}
			else
			{
				$datos_json['resultado'] = false;
			}
		}
		else
		{
			$datos_json['existe'] = true;
			$datos_json['resultado'] = false;
		}
		return json_encode($datos_json);
	}

	//--------------------------------------------------------------------------
	
	function edit($id = null)
	{
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid listallegada', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Listallegada->save($this->data)) {
				$this->Session->setFlash(__('The listallegada has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The listallegada could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Listallegada->read(null, $id);
		}
	}

	//--------------------------------------------------------------------------
	
	function delete($id = null)
	{
		$this->autoLayout = false;
		$this->autoRender = false;
		if ( $this->Listallegada->delete($id) )
		{
			$datos_json['resultado'] = true;
		}
		else
		{
			$datos_json['resultado'] = false;
		}
		return json_encode($datos_json);
	}
	
	//--------------------------------------------------------------------------
	
	function existe($id_trabajador)
	{
		$this->autoLayout = false;
		$this->autoRender = false;
		$lista = $this->Listallegada->find('first',array
		(
			'conditions' => array('Listallegada.id_trabajador'=>$id_trabajador),
			'fields' => array('id')
		));
		if ( !empty($lista) )
		{
			return true;
		}
		return false;
	}
	
	//--------------------------------------------------------------------------
	
	function listar()
	{
		$this->autoLayout = false;
		$this->autoRender = false;
		$datos_json = array();
		$lista = $this->Listallegada->find('all',array
		(
			'fields' => array('Listallegada.id', 'Trabajador.nombre', 'TIME(Listallegada.created) AS hora')
		));
		if ( !empty($lista) )
		{
			$datos_json['resultado'] = true;
			$datos_json['lista'] = $lista;
		}
		else
		{
			$datos_json['resultado'] = false;
		}
		return json_encode($datos_json);
	}
	
	//--------------------------------------------------------------------------
	
	function limpiar()
	{
		$this->autoLayout = false;
		$this->autoRender = false;
		if ( $this->Listallegada->deleteAll('1=1', false) )
		{
			$datos_json['resultado'] = true;
		}
		else
		{
			$datos_json['resultado'] = false;
		}
		return json_encode($datos_json);
	}
	
	//--------------------------------------------------------------------------
}
?>