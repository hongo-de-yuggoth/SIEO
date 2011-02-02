<div class="antecedenteslaborales form">
<?php echo $this->Form->create('Antecedentelaboral');?>
	<fieldset>
 		<legend><?php __('Add Antecedentelaboral'); ?></legend>
	<?php
		echo $this->Form->input('id_hco');
		echo $this->Form->input('empresa_sector');
		echo $this->Form->input('cargo');
		echo $this->Form->input('riesgos');
		echo $this->Form->input('tiempo_exposicion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Antecedenteslaborales', true), array('action' => 'index'));?></li>
	</ul>
</div>