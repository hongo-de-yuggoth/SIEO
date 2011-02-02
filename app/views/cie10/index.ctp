<div class="cie10 index">
	<h2><?php __('Cie10');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('codigo');?></th>
			<th><?php echo $this->Paginator->sort('descripcion');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($cie10 as $cie10):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $cie10['Cie10']['id']; ?>&nbsp;</td>
		<td><?php echo $cie10['Cie10']['codigo']; ?>&nbsp;</td>
		<td><?php echo $cie10['Cie10']['descripcion']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $cie10['Cie10']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $cie10['Cie10']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $cie10['Cie10']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $cie10['Cie10']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Cie10', true), array('action' => 'add')); ?></li>
	</ul>
</div>