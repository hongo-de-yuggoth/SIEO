<div class="localidades view">
<h2><?php  __('Localidad');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $localidad['Localidad']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nombre'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $localidad['Localidad']['nombre']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Localidad', true), array('action' => 'edit', $localidad['Localidad']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Localidad', true), array('action' => 'delete', $localidad['Localidad']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $localidad['Localidad']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Localidades', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Localidad', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
