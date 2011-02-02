<div class="impresionesdiagnosticas index">
	<h2><?php __('Impresionesdiagnosticas');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('id_hco');?></th>
			<th><?php echo $this->Paginator->sort('id_cie10');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($impresionesdiagnosticas as $impresiondiagnostica):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $impresiondiagnostica['Impresiondiagnostica']['id']; ?>&nbsp;</td>
		<td><?php echo $impresiondiagnostica['Impresiondiagnostica']['id_hco']; ?>&nbsp;</td>
		<td><?php echo $impresiondiagnostica['Impresiondiagnostica']['id_cie10']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $impresiondiagnostica['Impresiondiagnostica']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $impresiondiagnostica['Impresiondiagnostica']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $impresiondiagnostica['Impresiondiagnostica']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $impresiondiagnostica['Impresiondiagnostica']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Impresiondiagnostica', true), array('action' => 'add')); ?></li>
	</ul>
</div>