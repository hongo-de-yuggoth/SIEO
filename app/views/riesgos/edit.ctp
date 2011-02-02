<div class="riesgos form">
<?php echo $this->Form->create('Riesgo');?>
	<fieldset>
 		<legend><?php __('Edit Riesgo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('id_tipo_riesgo');
		echo $this->Form->input('riesgo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Riesgo.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Riesgo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Riesgos', true), array('action' => 'index'));?></li>
	</ul>
</div>