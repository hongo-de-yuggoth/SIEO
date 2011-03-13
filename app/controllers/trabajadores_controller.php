<?php
class TrabajadoresController extends AppController
{
	var $name = 'Trabajadores';
	var $sexo = array('M'=>'MASCULINO', 'F'=>'FEMENINO');

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
			if ( $this->data['Trabajador']['id_depto'] == '33' )
			{
				$this->data['Trabajador']['id_ciudad'] = 0;
			}
			else
			{
				$this->data['Trabajador']['id_localidad'] = 0;
			}
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
					'Departamento.id',
					'Departamento.nombre',
					'Localidad.nombre'
				)
			));
			if ( !empty($empresa) )
			{
				// mb_convert_case(, MB_CASE_UPPER, "UTF-8")
				
				// creamos inputs hidden
				$input_id = '<input id="id_trabajador" name="data[Trabajador][id]" type="hidden" value="'.$trabajador['Trabajador']['id'].'"/>';
				$input_nombre = '<input id="nombre_trabajador" type="hidden" value="'.mb_convert_case( $trabajador['Trabajador']['nombre'], MB_CASE_UPPER, "UTF-8").'"/>';
				$input_sexo = '<input id="sexo_trabajador" type="hidden" value="'.$this->sexo[$trabajador['Trabajador']['sexo']].'"/>';
				$input_tipo_documento = '<input id="tipo_documento_trabajador" type="hidden" value="'.$trabajador['Trabajador']['tipo_doc'].'"/>';
				$input_numero_documento = '<input id="numero_documento_trabajador" type="hidden" value="'.$trabajador['Trabajador']['numero_doc'].'"/>';
				$input_direccion = '<input id="direccion_trabajador" type="hidden" value="'.mb_convert_case(htmlspecialchars($trabajador['Trabajador']['direccion']), MB_CASE_UPPER, "UTF-8").'"/>';
				$input_localidad_trabajador = '<input id="localidad_trabajador" type="hidden" value="'.$trabajador['Localidad']['id'].'"/>';
				$input_ciudad_trabajador = '<input id="ciudad_trabajador" type="hidden" value="'.$trabajador['Ciudad']['id'].'"/>';
				$input_departamento_trabajador = '<input id="departamento_trabajador" type="hidden" value="'.$trabajador['Departamento']['id'].'"/>';
				$input_telefono_familiar = '<input id="telefono_familiar_trabajador" type="hidden" value="'.$trabajador['Trabajador']['telefono_familiar'].'"/>';
				$input_telefono_personal = '<input id="telefono_personal_trabajador" type="hidden" value="'.$trabajador['Trabajador']['telefono_personal'].'"/>';
				$input_fecha_nacimiento = '<input id="fecha_nacimiento_trabajador" type="hidden" value="'.$trabajador['Trabajador']['fecha_nacimiento'].'"/>';
				$input_nivel_estudio = '<input id="nivel_estudio_trabajador" type="hidden" value="'.$trabajador['Trabajador']['nivel_estudio'].'"/>';
				$input_eps = '<input id="eps_trabajador" type="hidden" value="'.mb_convert_case($trabajador['Trabajador']['eps'], MB_CASE_UPPER, "UTF-8").'"/>';
				$input_estado_civil = '<input id="id_estado_civil_trabajador" type="hidden" value="'.$trabajador['Estadocivil']['id'].'"/>';
				$input_cant_hijos = '<input id="cant_hijos_trabajador" type="hidden" value="'.$trabajador['Trabajador']['cant_hijos'].'"/>';
				$input_nombre_foto = '<input id="nombre_foto_trabajador" type="hidden" value="'.$trabajador['Trabajador']['nombre_foto'].'"/>';
				$input_empresa = '<input id="empresa_trabajador" type="hidden" value="'.mb_convert_case($trabajador['Empresa']['nombre'], MB_CASE_UPPER, "UTF-8").'"/>';
				$input_ciudad_empresa = '<input id="ciudad_empresa" type="hidden" value="'.mb_convert_case(utf8_encode($empresa['Ciudad']['nombre']), MB_CASE_UPPER, "UTF-8").'"/>';
				$input_localidad_empresa = '<input id="localidad_empresa" type="hidden" value="'.mb_convert_case($empresa['Localidad']['nombre'], MB_CASE_UPPER, "UTF-8").'"/>';
				$input_id_departamento_empresa = '<input id="id_departamento_empresa" type="hidden" value="'.$empresa['Departamento']['id'].'"/>';
				$input_departamento_empresa = '<input id="departamento_empresa" type="hidden" value="'.mb_convert_case(utf8_encode($empresa['Departamento']['nombre']), MB_CASE_UPPER, "UTF-8").'"/>';
				$input_arp = '<input id="arp_trabajador" type="hidden" value="'.mb_convert_case($trabajador['Empresa']['arp'], MB_CASE_UPPER, "UTF-8").'"/>';
				$input_religion = '<input id="id_practica_religiosa_trabajador" type="hidden" value="'.$trabajador['Religion']['id'].'"/>';
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
							$input_nivel_estudio.
							$input_eps.
							$input_estado_civil.
							$input_cant_hijos.
							$input_nombre_foto.
							$input_empresa.
							$input_arp.
							$input_religion.
							$input_localidad_trabajador.
							$input_ciudad_trabajador.
							$input_departamento_trabajador.
							$input_ciudad_empresa.
							$input_id_departamento_empresa.
							$input_departamento_empresa.
							$input_localidad_empresa.
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
		$this->loadModel('Departamento');
		$this->loadModel('Ciudad');
		$this->loadModel('Localidad');
		$this->loadModel('Religion');
		$empresas = $this->Empresa->find('all', array
		(
			'fields' => array
			(
				'Empresa.id',
				'Empresa.nombre'
			),
			'order' => 'Empresa.nombre',
			'recursive' => 0
		));
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
		$religiones = $this->Religion->find('all', array
		(
			'fields' => array
			(
				'Religion.id',
				'Religion.nombre'
			),
			'order' => 'Religion.nombre',
			'recursive' => 0
		));
		if ( !empty($empresas) && !empty($departamentos) && !empty($ciudades) &&
				!empty($localidades) && !empty($religiones) )
		{
			$empresas_options = '';
			foreach ( $empresas as $empresa )
			{
				$empresas_options .= '<option value="'.$empresa['Empresa']['id'].'">'.$empresa['Empresa']['nombre'].'</option>';
			}
			
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
			
			$religiones_options = '';
			foreach ( $religiones as $religion )
			{
				$religiones_options .= '<option value="'.$religion['Religion']['id'].'">'.$religion['Religion']['nombre'].'</option>';
			}
			$this->set('empresas', $empresas_options);
			$this->set('departamentos', utf8_encode($departamentos_options));
			$this->set('ciudades', utf8_encode($ciudades_options));
			$this->set('localidades', $localidades_options);
			$this->set('religiones', $religiones_options);
		}
		
	}
	
	//--------------------------------------------------------------------------
}
?>