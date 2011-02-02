<div class="impresionesdiagnosticas form">
<?php echo $this->Form->create('Impresiondiagnostica');?>
	<fieldset>
 		<legend><?php __('Edit Impresiondiagnostica'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('id_hco');
		echo $this->Form->input('id_cie10');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Impresiondiagnostica.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Impresiondiagnostica.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Impresionesdiagnosticas', true), array('action' => 'index'));?></li>
	</ul>
</div>