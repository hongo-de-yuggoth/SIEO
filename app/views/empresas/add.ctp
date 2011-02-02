<div class="empresas form">
<?php echo $this->Form->create('Empresa');?>
	<fieldset>
 		<legend><?php __('Add Empresa'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Empresas', true), array('action' => 'index'));?></li>
	</ul>
</div>