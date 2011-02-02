<div class="ciudades view">
<h2><?php  __('Ciudad');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ciudad['Ciudad']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nombre'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ciudad['Ciudad']['nombre']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id Depto'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ciudad['Ciudad']['id_depto']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Ciudad', true), array('action' => 'edit', $ciudad['Ciudad']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Ciudad', true), array('action' => 'delete', $ciudad['Ciudad']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $ciudad['Ciudad']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Ciudades', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ciudad', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
