<div class="listallegadas form">
<?php echo $this->Form->create('Listallegada');?>
	<fieldset>
 		<legend><?php __('Add Listallegada'); ?></legend>
	<?php
		echo $this->Form->input('id_trabajador');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Listallegadas', true), array('action' => 'index'));?></li>
	</ul>
</div>