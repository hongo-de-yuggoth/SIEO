<div class="ciudades form">
<?php echo $this->Form->create('Ciudad');?>
	<fieldset>
 		<legend><?php __('Edit Ciudad'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('id_depto');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Ciudad.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Ciudad.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Ciudades', true), array('action' => 'index'));?></li>
	</ul>
</div>