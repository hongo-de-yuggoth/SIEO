<div class="tiposriesgos form">
<?php echo $this->Form->create('Tiporiesgo');?>
	<fieldset>
 		<legend><?php __('Add Tiporiesgo'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tiposriesgos', true), array('action' => 'index'));?></li>
	</ul>
</div>