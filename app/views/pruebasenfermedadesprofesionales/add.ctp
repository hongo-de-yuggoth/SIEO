<div class="pruebasenfermedadesprofesionales form">
<?php echo $this->Form->create('Pruebaenfermedadprofesional');?>
	<fieldset>
 		<legend><?php __('Add Pruebaenfermedadprofesional'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Pruebasenfermedadesprofesionales', true), array('action' => 'index'));?></li>
	</ul>
</div>