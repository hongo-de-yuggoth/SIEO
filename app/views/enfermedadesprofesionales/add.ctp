<div class="enfermedadesprofesionales form">
<?php echo $this->Form->create('Enfermedadprofesional');?>
	<fieldset>
 		<legend><?php __('Add Enfermedadprofesional'); ?></legend>
	<?php
		echo $this->Form->input('id_hco');
		echo $this->Form->input('empresa');
		echo $this->Form->input('diagnostico');
		echo $this->Form->input('calificacion');
		echo $this->Form->input('indemnizacion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Enfermedadesprofesionales', true), array('action' => 'index'));?></li>
	</ul>
</div>