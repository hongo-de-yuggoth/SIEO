<?php
class Empresa extends AppModel {
	var $name = 'Empresa';
	var $belongsTo = array
	(
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
		'Localidad' => array
		(
			'className' => 'Localidad',
			'foreignKey' => 'id_localidad'
		)
	);
}
?>