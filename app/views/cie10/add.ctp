<div class="cie10 form">
<?php echo $this->Form->create('Cie10');?>
	<fieldset>
 		<legend><?php __('Add Cie10'); ?></legend>
	<?php
		echo $this->Form->input('codigo');
		echo $this->Form->input('descripcion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Cie10', true), array('action' => 'index'));?></li>
	</ul>
</div>