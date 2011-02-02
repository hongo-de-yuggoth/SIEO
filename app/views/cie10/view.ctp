<div class="cie10 view">
<h2><?php  __('Cie10');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cie10['Cie10']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Codigo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cie10['Cie10']['codigo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descripcion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cie10['Cie10']['descripcion']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cie10', true), array('action' => 'edit', $cie10['Cie10']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Cie10', true), array('action' => 'delete', $cie10['Cie10']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $cie10['Cie10']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cie10', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cie10', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
