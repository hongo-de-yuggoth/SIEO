<div class="departamentos form">
<?php echo $this->Form->create('Departamento');?>
	<fieldset>
 		<legend><?php __('Add Departamento'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Departamentos', true), array('action' => 'index'));?></li>
	</ul>
</div>