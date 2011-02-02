<div class="recomendaciones index">
	<h2><?php __('Recomendaciones');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('id_hco');?></th>
			<th><?php echo $this->Paginator->sort('recomendacion');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($recomendaciones as $recomendacion):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $recomendacion['Recomendacion']['id']; ?>&nbsp;</td>
		<td><?php echo $recomendacion['Recomendacion']['id_hco']; ?>&nbsp;</td>
		<td><?php echo $recomendacion['Recomendacion']['recomendacion']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $recomendacion['Recomendacion']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $recomendacion['Recomendacion']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $recomendacion['Recomendacion']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $recomendacion['Recomendacion']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Recomendacion', true), array('action' => 'add')); ?></li>
	</ul>
</div>