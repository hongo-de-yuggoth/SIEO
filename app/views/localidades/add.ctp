<div class="localidades form">
<?php echo $this->Form->create('Localidad');?>
	<fieldset>
 		<legend><?php __('Add Localidad'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Localidades', true), array('action' => 'index'));?></li>
	</ul>
</div>