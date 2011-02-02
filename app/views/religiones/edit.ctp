<div class="religiones form">
<?php echo $this->Form->create('Religion');?>
	<fieldset>
 		<legend><?php __('Edit Religion'); ?></legend>
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

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Religion.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Religion.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Religiones', true), array('action' => 'index'));?></li>
	</ul>
</div>