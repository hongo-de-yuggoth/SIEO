<div class="trabajadores form">
<?php echo $this->Form->create('Trabajador');?>
	<fieldset>
 		<legend><?php __('Add Trabajador'); ?></legend>
	<?php
		echo $this->Form->input('id_empresa');
		echo $this->Form->input('nombre');
		echo $this->Form->input('tipo_doc');
		echo $this->Form->input('numero_doc');
		echo $this->Form->input('sexo');
		echo $this->Form->input('direccion');
		echo $this->Form->input('id_ciudad');
		echo $this->Form->input('id_depto');
		echo $this->Form->input('id_localidad');
		echo $this->Form->input('telefono_familiar');
		echo $this->Form->input('telefono_personal');
		echo $this->Form->input('fecha_nacimiento');
		echo $this->Form->input('cargo_desempeñar');
		echo $this->Form->input('nivel_estudio');
		echo $this->Form->input('eps');
		echo $this->Form->input('arp');
		echo $this->Form->input('estado_civil');
		echo $this->Form->input('id_religion');
		echo $this->Form->input('cant_hijos');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Trabajadores', true), array('action' => 'index'));?></li>
	</ul>
</div>