<div class="accidentestrabajos form">
<?php echo $this->Form->create('Accidentetrabajo');?>
	<fieldset>
 		<legend><?php __('Add Accidentetrabajo'); ?></legend>
	<?php
		echo $this->Form->input('id_hco');
		echo $this->Form->input('empresa');
		echo $this->Form->input('fecha');
		echo $this->Form->input('lesion');
		echo $this->Form->input('secuelas');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Accidentestrabajos', true), array('action' => 'index'));?></li>
	</ul>
</div>