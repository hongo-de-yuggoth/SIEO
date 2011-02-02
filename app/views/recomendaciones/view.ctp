<div class="recomendaciones view">
<h2><?php  __('Recomendacion');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $recomendacion['Recomendacion']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id Hco'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $recomendacion['Recomendacion']['id_hco']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Recomendacion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $recomendacion['Recomendacion']['recomendacion']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Recomendacion', true), array('action' => 'edit', $recomendacion['Recomendacion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Recomendacion', true), array('action' => 'delete', $recomendacion['Recomendacion']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $recomendacion['Recomendacion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Recomendaciones', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recomendacion', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
