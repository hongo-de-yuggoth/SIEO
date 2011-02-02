<div class="accidentestrabajos view">
<h2><?php  __('Accidentetrabajo');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $accidentetrabajo['Accidentetrabajo']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id Hco'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $accidentetrabajo['Accidentetrabajo']['id_hco']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Empresa'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $accidentetrabajo['Accidentetrabajo']['empresa']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fecha'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $accidentetrabajo['Accidentetrabajo']['fecha']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Lesion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $accidentetrabajo['Accidentetrabajo']['lesion']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Secuelas'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $accidentetrabajo['Accidentetrabajo']['secuelas']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Accidentetrabajo', true), array('action' => 'edit', $accidentetrabajo['Accidentetrabajo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Accidentetrabajo', true), array('action' => 'delete', $accidentetrabajo['Accidentetrabajo']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $accidentetrabajo['Accidentetrabajo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Accidentestrabajos', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Accidentetrabajo', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
