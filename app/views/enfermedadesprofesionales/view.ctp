<div class="enfermedadesprofesionales view">
<h2><?php  __('Enfermedadprofesional');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $enfermedadprofesional['Enfermedadprofesional']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id Hco'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $enfermedadprofesional['Enfermedadprofesional']['id_hco']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Empresa'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $enfermedadprofesional['Enfermedadprofesional']['empresa']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Diagnostico'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $enfermedadprofesional['Enfermedadprofesional']['diagnostico']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Calificacion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $enfermedadprofesional['Enfermedadprofesional']['calificacion']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Indemnizacion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $enfermedadprofesional['Enfermedadprofesional']['indemnizacion']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Enfermedadprofesional', true), array('action' => 'edit', $enfermedadprofesional['Enfermedadprofesional']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Enfermedadprofesional', true), array('action' => 'delete', $enfermedadprofesional['Enfermedadprofesional']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $enfermedadprofesional['Enfermedadprofesional']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Enfermedadesprofesionales', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Enfermedadprofesional', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
