<div class="pruebasenfermedadesprofesionales form">
<?php echo $this->Form->create('Pruebaenfermedadprofesional');?>
	<fieldset>
 		<legend><?php __('Edit Pruebaenfermedadprofesional'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('id_hco');
		echo $this->Form->input('thinnel');
		echo $this->Form->input('phalen');
		echo $this->Form->input('flinkestein');
		echo $this->Form->input('wells');
		echo $this->Form->input('movilidad_columna');
		echo $this->Form->input('laessege');
		echo $this->Form->input('rombert');
		echo $this->Form->input('vertigo');
		echo $this->Form->input('hallazgos');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Pruebaenfermedadprofesional.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Pruebaenfermedadprofesional.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Pruebasenfermedadesprofesionales', true), array('action' => 'index'));?></li>
	</ul>
</div>