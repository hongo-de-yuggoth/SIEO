<div class="examenesfisicos form">
<?php echo $this->Form->create('Examenfisico');?>
	<fieldset>
 		<legend><?php __('Edit Examenfisico'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('id_hco');
		echo $this->Form->input('frec_cardiaca');
		echo $this->Form->input('frec_respiratoria');
		echo $this->Form->input('tension_arterial_a');
		echo $this->Form->input('tension_arterial_b');
		echo $this->Form->input('peso');
		echo $this->Form->input('talla');
		echo $this->Form->input('imc');
		echo $this->Form->input('lateralidad');
		echo $this->Form->input('practica_deportiva');
		echo $this->Form->input('cant_semanal');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Examenfisico.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Examenfisico.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Examenesfisicos', true), array('action' => 'index'));?></li>
	</ul>
</div>