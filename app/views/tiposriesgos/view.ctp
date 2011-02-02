<div class="tiposriesgos view">
<h2><?php  __('Tiporiesgo');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tiporiesgo['Tiporiesgo']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nombre'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tiporiesgo['Tiporiesgo']['nombre']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tiporiesgo', true), array('action' => 'edit', $tiporiesgo['Tiporiesgo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Tiporiesgo', true), array('action' => 'delete', $tiporiesgo['Tiporiesgo']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tiporiesgo['Tiporiesgo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tiposriesgos', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tiporiesgo', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
