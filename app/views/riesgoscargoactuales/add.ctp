<div class="riesgoscargoactuales form">
<?php echo $this->Form->create('Riesgocargoactual');?>
	<fieldset>
 		<legend><?php __('Add Riesgocargoactual'); ?></legend>
	<?php
		echo $this->Form->input('id_hco');
		echo $this->Form->input('id_riesgo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Riesgoscargoactuales', true), array('action' => 'index'));?></li>
	</ul>
</div>