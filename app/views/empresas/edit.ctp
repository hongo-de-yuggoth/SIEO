<div class="empresas form">
<?php echo $this->Form->create('Empresa');?>
	<fieldset>
 		<legend><?php __('Edit Empresa'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('id_ciudad');
		echo $this->Form->input('id_depto');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Empresa.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Empresa.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Empresas', true), array('action' => 'index'));?></li>
	</ul>
</div>