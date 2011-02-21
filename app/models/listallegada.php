<?php
class Listallegada extends AppModel
{
	var $name = 'Listallegada';
	var $belongsTo = array
	(
		'Trabajador' => array
		(
			'className' => 'Trabajador',
			'foreignKey' => 'id_trabajador'
		)
	);
}
?>