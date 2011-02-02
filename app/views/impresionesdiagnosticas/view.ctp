<div class="impresionesdiagnosticas view">
<h2><?php  __('Impresiondiagnostica');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $impresiondiagnostica['Impresiondiagnostica']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id Hco'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $impresiondiagnostica['Impresiondiagnostica']['id_hco']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id Cie10'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $impresiondiagnostica['Impresiondiagnostica']['id_cie10']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Impresiondiagnostica', true), array('action' => 'edit', $impresiondiagnostica['Impresiondiagnostica']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Impresiondiagnostica', true), array('action' => 'delete', $impresiondiagnostica['Impresiondiagnostica']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $impresiondiagnostica['Impresiondiagnostica']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Impresionesdiagnosticas', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Impresiondiagnostica', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
