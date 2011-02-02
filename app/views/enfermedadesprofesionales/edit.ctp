<div class="enfermedadesprofesionales form">
<?php echo $this->Form->create('Enfermedadprofesional');?>
	<fieldset>
 		<legend><?php __('Edit Enfermedadprofesional'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Enfermedadprofesional.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Enfermedadprofesional.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Enfermedadesprofesionales', true), array('action' => 'index'));?></li>
	</ul>
</div>