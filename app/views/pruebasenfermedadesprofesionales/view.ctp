<div class="pruebasenfermedadesprofesionales view">
<h2><?php  __('Pruebaenfermedadprofesional');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pruebaenfermedadprofesional['Pruebaenfermedadprofesional']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id Hco'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pruebaenfermedadprofesional['Pruebaenfermedadprofesional']['id_hco']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Thinnel'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pruebaenfermedadprofesional['Pruebaenfermedadprofesional']['thinnel']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Phalen'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pruebaenfermedadprofesional['Pruebaenfermedadprofesional']['phalen']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Flinkestein'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pruebaenfermedadprofesional['Pruebaenfermedadprofesional']['flinkestein']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Wells'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pruebaenfermedadprofesional['Pruebaenfermedadprofesional']['wells']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Movilidad Columna'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pruebaenfermedadprofesional['Pruebaenfermedadprofesional']['movilidad_columna']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Laessege'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pruebaenfermedadprofesional['Pruebaenfermedadprofesional']['laessege']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Rombert'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pruebaenfermedadprofesional['Pruebaenfermedadprofesional']['rombert']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Vertigo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pruebaenfermedadprofesional['Pruebaenfermedadprofesional']['vertigo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Hallazgos'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pruebaenfermedadprofesional['Pruebaenfermedadprofesional']['hallazgos']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Pruebaenfermedadprofesional', true), array('action' => 'edit', $pruebaenfermedadprofesional['Pruebaenfermedadprofesional']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Pruebaenfermedadprofesional', true), array('action' => 'delete', $pruebaenfermedadprofesional['Pruebaenfermedadprofesional']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $pruebaenfermedadprofesional['Pruebaenfermedadprofesional']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Pruebasenfermedadesprofesionales', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pruebaenfermedadprofesional', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
