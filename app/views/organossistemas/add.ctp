<div class="organossistemas form">
<?php echo $this->Form->create('Organosistema');?>
	<fieldset>
 		<legend><?php __('Add Organosistema'); ?></legend>
	<?php
		echo $this->Form->input('id_hco');
		echo $this->Form->input('cc_configuracion');
		echo $this->Form->input('cc_odontologico');
		echo $this->Form->input('oft_externo');
		echo $this->Form->input('oft_fundoscopia');
		echo $this->Form->input('auditivo');
		echo $this->Form->input('respiratorio');
		echo $this->Form->input('cardiaco');
		echo $this->Form->input('gastrointestinal');
		echo $this->Form->input('genital');
		echo $this->Form->input('extremidades');
		echo $this->Form->input('neurologico');
		echo $this->Form->input('circulatorio');
		echo $this->Form->input('mental');
		echo $this->Form->input('ampliacion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Organossistemas', true), array('action' => 'index'));?></li>
	</ul>
</div>