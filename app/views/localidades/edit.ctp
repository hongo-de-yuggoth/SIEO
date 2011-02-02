<div class="localidades form">
<?php echo $this->Form->create('Localidad');?>
	<fieldset>
 		<legend><?php __('Edit Localidad'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Localidad.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Localidad.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Localidades', true), array('action' => 'index'));?></li>
	</ul>
</div>