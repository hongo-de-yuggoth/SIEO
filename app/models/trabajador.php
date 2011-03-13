<?php
class Trabajador extends AppModel
{
	var $name = 'Trabajador';
	
	var $belongsTo = array
	(
		'Empresa' => array
		(
			'className' => 'Empresa',
			'foreignKey' => 'id_empresa'
		),
		'Religion' => array
		(
			'className' => 'Religion',
			'foreignKey' => 'id_religion'
		),
		'Localidad' => array
		(
			'className' => 'Localidad',
			'foreignKey' => 'id_localidad'
		),
		'Ciudad' => array
		(
			'className' => 'Ciudad',
			'foreignKey' => 'id_ciudad'
		),
		'Departamento' => array
		(
			'className' => 'Departamento',
			'foreignKey' => 'id_depto'
		),
		'Estadocivil' => array
		(
			'className' => 'Estadocivil',
			'foreignKey' => 'id_estado_civil'
		)
	);
}
?>