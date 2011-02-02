<div class="riesgos form">
<?php echo $this->Form->create('Riesgo');?>
	<fieldset>
 		<legend><?php __('Add Riesgo'); ?></legend>
	<?php
		echo $this->Form->input('id_tipo_riesgo');
		echo $this->Form->input('riesgo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Riesgos', true), array('action' => 'index'));?></li>
	</ul>
</div>