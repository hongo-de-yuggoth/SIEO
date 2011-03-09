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
		)
	);
}
?>