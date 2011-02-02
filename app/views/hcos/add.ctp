<div class="hcos form">
<?php echo $this->Form->create('Hco');?>
	<fieldset>
 		<legend><?php __('Add Hco'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('id_trabajador');
		echo $this->Form->input('id_empresa');
		echo $this->Form->input('tipo_examen');
		echo $this->Form->input('motivo_consulta');
		echo $this->Form->input('revision_sistemas');
		echo $this->Form->input('id_antecedentes');
		echo $this->Form->input('id_examen_fisico');
		echo $this->Form->input('id_organos_sistemas');
		echo $this->Form->input('id_paraclinicos');
		echo $this->Form->input('id_pruebas_enfermedad_prof');
		echo $this->Form->input('concepto_medico_ocupacional');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Hcos', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>