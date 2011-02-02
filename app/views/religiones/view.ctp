<div class="religiones view">
<h2><?php  __('Religion');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $religion['Religion']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nombre'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $religion['Religion']['nombre']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Religion', true), array('action' => 'edit', $religion['Religion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Religion', true), array('action' => 'delete', $religion['Religion']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $religion['Religion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Religiones', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Religion', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
