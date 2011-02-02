<div class="listallegadas form">
<?php echo $this->Form->create('Listallegada');?>
	<fieldset>
 		<legend><?php __('Edit Listallegada'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('id_trabajador');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Listallegada.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Listallegada.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Listallegadas', true), array('action' => 'index'));?></li>
	</ul>
</div>