<div class="paraclinicos form">
<?php echo $this->Form->create('Paraclinico');?>
	<fieldset>
 		<legend><?php __('Edit Paraclinico'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('id_hco');
		echo $this->Form->input('audiometria');
		echo $this->Form->input('espirometria');
		echo $this->Form->input('visiometria');
		echo $this->Form->input('test_vestibular');
		echo $this->Form->input('cuadro_hematico');
		echo $this->Form->input('glucosa_suero');
		echo $this->Form->input('pl_hdl');
		echo $this->Form->input('pl_colesterol_total');
		echo $this->Form->input('pl_trigliceridos');
		echo $this->Form->input('pl_ldl');
		echo $this->Form->input('pl_orina');
		echo $this->Form->input('pl_otros');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Paraclinico.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Paraclinico.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Paraclinicos', true), array('action' => 'index'));?></li>
	</ul>
</div>