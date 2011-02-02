<div class="riesgos view">
<h2><?php  __('Riesgo');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $riesgo['Riesgo']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id Tipo Riesgo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $riesgo['Riesgo']['id_tipo_riesgo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Riesgo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $riesgo['Riesgo']['riesgo']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Riesgo', true), array('action' => 'edit', $riesgo['Riesgo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Riesgo', true), array('action' => 'delete', $riesgo['Riesgo']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $riesgo['Riesgo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Riesgos', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Riesgo', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
