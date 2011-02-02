<div class="recomendaciones form">
<?php echo $this->Form->create('Recomendacion');?>
	<fieldset>
 		<legend><?php __('Add Recomendacion'); ?></legend>
	<?php
		echo $this->Form->input('id_hco');
		echo $this->Form->input('recomendacion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Recomendaciones', true), array('action' => 'index'));?></li>
	</ul>
</div>