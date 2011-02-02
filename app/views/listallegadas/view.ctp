<div class="listallegadas view">
<h2><?php  __('Listallegada');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $listallegada['Listallegada']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id Trabajador'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $listallegada['Listallegada']['id_trabajador']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $listallegada['Listallegada']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $listallegada['Listallegada']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Listallegada', true), array('action' => 'edit', $listallegada['Listallegada']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Listallegada', true), array('action' => 'delete', $listallegada['Listallegada']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $listallegada['Listallegada']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Listallegadas', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Listallegada', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
