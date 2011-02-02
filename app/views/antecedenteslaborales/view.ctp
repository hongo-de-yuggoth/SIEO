<div class="antecedenteslaborales view">
<h2><?php  __('Antecedentelaboral');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $antecedentelaboral['Antecedentelaboral']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id Hco'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $antecedentelaboral['Antecedentelaboral']['id_hco']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Empresa Sector'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $antecedentelaboral['Antecedentelaboral']['empresa_sector']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Cargo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $antecedentelaboral['Antecedentelaboral']['cargo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Riesgos'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $antecedentelaboral['Antecedentelaboral']['riesgos']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tiempo Exposicion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $antecedentelaboral['Antecedentelaboral']['tiempo_exposicion']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Antecedentelaboral', true), array('action' => 'edit', $antecedentelaboral['Antecedentelaboral']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Antecedentelaboral', true), array('action' => 'delete', $antecedentelaboral['Antecedentelaboral']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $antecedentelaboral['Antecedentelaboral']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Antecedenteslaborales', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Antecedentelaboral', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
