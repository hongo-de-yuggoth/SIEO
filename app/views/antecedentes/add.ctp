<div class="antecedentes form">
<?php echo $this->Form->create('Antecedente');?>
	<fieldset>
 		<legend><?php __('Add Antecedente'); ?></legend>
	<?php
		echo $this->Form->input('id_hco');
		echo $this->Form->input('patologico');
		echo $this->Form->input('quirurgico');
		echo $this->Form->input('traumaticos');
		echo $this->Form->input('farmacologico');
		echo $this->Form->input('alergicos');
		echo $this->Form->input('frec_mes_alcohol');
		echo $this->Form->input('tabaquismo');
		echo $this->Form->input('cant_cigarrillos');
		echo $this->Form->input('familiar');
		echo $this->Form->input('inmunologico');
		echo $this->Form->input('gin_g');
		echo $this->Form->input('gin_p');
		echo $this->Form->input('gin_a');
		echo $this->Form->input('gin_m');
		echo $this->Form->input('gin_gem');
		echo $this->Form->input('gin_c');
		echo $this->Form->input('gin_fum');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Antecedentes', true), array('action' => 'index'));?></li>
	</ul>
</div>