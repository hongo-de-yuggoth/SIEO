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

	//--------------------------------------------------------------------------
	
	function view($id = null)
	{
		if (!$id) {
			$this->Session->setFlash(__('Invalid trabajador', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('trabajador', $this->Trabajador->read(null, $id));
	}

	//--------------------------------------------------------------------------
	
	function add()
	{
		if ( !empty($this->data) )
		{
			$this->Trabajador->create();
			if ( $this->Trabajador->save($this->data) )
			{
				// Seteamos valores de info de exito...
				
			}
			else
			{
				// Seteamos valores de info de fallo...
			}
			$this->redirect(array('action' => 'registrar'));
		}
	}
	
	//--------------------------------------------------------------------------

	function edit($id = null)
	{
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

	//--------------------------------------------------------------------------
	
	function delete($id = null)
	{
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
	
	function buscar_info_completa($tipo_doc, $numero_doc)
	{
		$this->autoLayout = false;
		$this->autoRender = false;
		$this->loadModel('Empresa');
		$trabajador = $this->Trabajador->find('first', array
		(
			'conditions' => array
			(
				'Trabajador.tipo_doc' => $tipo_doc,
				'Trabajador.numero_doc' => $numero_doc
			)
		));
		if ( !empty($trabajador) )
		{
			$empresa = $this->Empresa->find('first', array
			(
				'conditions' => array('Empresa.id' => $trabajador['Empresa']['id']),
				'fields' => array
				(
					'Ciudad.nombre',
					'Departamento.nombre'
				)
			));
			if ( !empty($empresa) )
			{
				// creamos inputs hidden
				$input_id = '<input id="id_trabajador" name="data[Trabajador][id]" type="hidden" value="'.$trabajador['Trabajador']['id'].'"/>';
				$input_nombre = '<input id="nombre_trabajador" type="hidden" value="'.mb_convert_case( $trabajador['Trabajador']['nombre'], MB_CASE_TITLE, "UTF-8").'"/>';
				$input_sexo = '<input id="sexo_trabajador" type="hidden" value="'.$this->sexo[$trabajador['Trabajador']['sexo']].'"/>';
				$input_tipo_documento = '<input id="tipo_documento_trabajador" type="hidden" value="'.$trabajador['Trabajador']['tipo_doc'].'"/>';
				$input_numero_documento = '<input id="numero_documento_trabajador" type="hidden" value="'.$trabajador['Trabajador']['numero_doc'].'"/>';
				$input_direccion = '<input id="direccion_trabajador" type="hidden" value="'.$trabajador['Trabajador']['direccion'].'"/>';
				$input_telefono_familiar = '<input id="telefono_familiar_trabajador" type="hidden" value="'.$trabajador['Trabajador']['telefono_familiar'].'"/>';
				$input_telefono_personal = '<input id="telefono_personal_trabajador" type="hidden" value="'.$trabajador['Trabajador']['telefono_personal'].'"/>';
				$input_fecha_nacimiento = '<input id="fecha_nacimiento_trabajador" type="hidden" value="'.$trabajador['Trabajador']['fecha_nacimiento'].'"/>';
				$input_cargo_desempenar = '<input id="cargo_desempenar_trabajador" type="hidden" value="'.$trabajador['Trabajador']['cargo_desempenar'].'"/>';
				$input_nivel_estudio = '<input id="nivel_estudio_trabajador" type="hidden" value="'.$trabajador['Trabajador']['nivel_estudio'].'"/>';
				$input_eps = '<input id="eps_trabajador" type="hidden" value="'.$trabajador['Trabajador']['eps'].'"/>';
				$input_estado_civil = '<input id="estado_civil_trabajador" type="hidden" value="'.$trabajador['Trabajador']['estado_civil'].'"/>';
				$input_cant_hijos = '<input id="cant_hijos_trabajador" type="hidden" value="'.$trabajador['Trabajador']['cant_hijos'].'"/>';
				$input_nombre_foto = '<input id="nombre_foto_trabajador" type="hidden" value="'.$trabajador['Trabajador']['nombre_foto'].'"/>';
				$input_empresa = '<input id="empresa_trabajador" type="hidden" value="'.$trabajador['Empresa']['nombre'].'"/>';
				$input_arp = '<input id="arp_trabajador" type="hidden" value="'.$trabajador['Empresa']['arp'].'"/>';
				$input_religion = '<input id="practica_religiosa_trabajador" type="hidden" value="'.$trabajador['Religion']['nombre'].'"/>';
				$input_localidad = '<input id="localidad_trabajador" type="hidden" value="'.$trabajador['Localidad']['nombre'].'"/>';
				$input_ciudad = '<input id="ciudad_trabajador" type="hidden" value="'.$empresa['Ciudad']['nombre'].'"/>';
				$input_departamento = '<input id="departamento_trabajador" type="hidden" value="'.$empresa['Departamento']['nombre'].'"/>';
				$input_encontro ='<input id="encontro" type="hidden" value="true"/>';
				return	$input_id.
							$input_nombre.
							$input_sexo.
							$input_tipo_documento.
							$input_numero_documento.
							$input_direccion.
							$input_telefono_familiar.
							$input_telefono_personal.
							$input_fecha_nacimiento.
							$input_cargo_desempenar.
							$input_nivel_estudio.
							$input_eps.
							$input_estado_civil.
							$input_cant_hijos.
							$input_nombre_foto.
							$input_empresa.
							$input_arp.
							$input_religion.
							$input_localidad.
							$input_ciudad.
							$input_departamento.
							$input_encontro;
			}
			else
			{
				return '<input id="encontro" type="hidden" value="false" />';
			}
		}
		else
		{
			return '<input id="encontro" type="hidden" value="false" />';
		}
	}
	
	//--------------------------------------------------------------------------
	
	function existe($tipo_doc, $numero_doc)
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
			'fields' => array('Trabajador.id')
		));
		if ( !empty($trabajador) )
		{
			return json_encode(array('existe' => true));
		}
		return json_encode(array('existe' => false));
	}
	
	//--------------------------------------------------------------------------
	
	function registrar()
	{
		$this->loadModel('Empresa');
		$this->loadModel('Localidad');
		$this->loadModel('Religion');
		$empresas = $this->Empresa->find('all', array
		(
			'fields' => array
			(
				'Empresa.id',
				'Empresa.nombre'
			),
			'recursive' => 0
		));
		$localidades = $this->Localidad->find('all', array
		(
			'fields' => array
			(
				'Localidad.id',
				'Localidad.nombre'
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
		if ( !empty($empresas) && !empty($localidades) && !empty($religiones) )
		{
			$empresas_options = '';
			foreach ( $empresas as $empresa )
			{
				$empresas_options .= '<option value="'.$empresa['Empresa']['id'].'">'.$empresa['Empresa']['nombre'].'</option>';
			}
			
			$localidades_options = '';
			foreach ( $localidades as $localidad )
			{
				$localidades_options .= '<option value="'.$localidad['Localidad']['id'].'">'.$localidad['Localidad']['nombre'].'</option>';
			}
			
			$religiones_options = '';
			foreach ( $religiones as $religion )
			{
				$religiones_options .= '<option value="'.$religion['Religion']['id'].'">'.$religion['Religion']['nombre'].'</option>';
			}
			$this->set('empresas', $empresas_options);
			$this->set('localidades', $localidades_options);
			$this->set('religiones', $religiones_options);
		}
		
	}
	
	//--------------------------------------------------------------------------
}
?>