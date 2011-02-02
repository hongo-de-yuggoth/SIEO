<div class="riesgoscargoactuales view">
<h2><?php  __('Riesgocargoactual');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $riesgocargoactual['Riesgocargoactual']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id Hco'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $riesgocargoactual['Riesgocargoactual']['id_hco']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id Riesgo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $riesgocargoactual['Riesgocargoactual']['id_riesgo']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Riesgocargoactual', true), array('action' => 'edit', $riesgocargoactual['Riesgocargoactual']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Riesgocargoactual', true), array('action' => 'delete', $riesgocargoactual['Riesgocargoactual']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $riesgocargoactual['Riesgocargoactual']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Riesgoscargoactuales', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Riesgocargoactual', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
