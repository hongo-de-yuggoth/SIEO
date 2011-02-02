<div class="paraclinicos index">
	<h2><?php __('Paraclinicos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('id_hco');?></th>
			<th><?php echo $this->Paginator->sort('audiometria');?></th>
			<th><?php echo $this->Paginator->sort('espirometria');?></th>
			<th><?php echo $this->Paginator->sort('visiometria');?></th>
			<th><?php echo $this->Paginator->sort('test_vestibular');?></th>
			<th><?php echo $this->Paginator->sort('cuadro_hematico');?></th>
			<th><?php echo $this->Paginator->sort('glucosa_suero');?></th>
			<th><?php echo $this->Paginator->sort('pl_hdl');?></th>
			<th><?php echo $this->Paginator->sort('pl_colesterol_total');?></th>
			<th><?php echo $this->Paginator->sort('pl_trigliceridos');?></th>
			<th><?php echo $this->Paginator->sort('pl_ldl');?></th>
			<th><?php echo $this->Paginator->sort('pl_orina');?></th>
			<th><?php echo $this->Paginator->sort('pl_otros');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($paraclinicos as $paraclinico):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $paraclinico['Paraclinico']['id']; ?>&nbsp;</td>
		<td><?php echo $paraclinico['Paraclinico']['id_hco']; ?>&nbsp;</td>
		<td><?php echo $paraclinico['Paraclinico']['audiometria']; ?>&nbsp;</td>
		<td><?php echo $paraclinico['Paraclinico']['espirometria']; ?>&nbsp;</td>
		<td><?php echo $paraclinico['Paraclinico']['visiometria']; ?>&nbsp;</td>
		<td><?php echo $paraclinico['Paraclinico']['test_vestibular']; ?>&nbsp;</td>
		<td><?php echo $paraclinico['Paraclinico']['cuadro_hematico']; ?>&nbsp;</td>
		<td><?php echo $paraclinico['Paraclinico']['glucosa_suero']; ?>&nbsp;</td>
		<td><?php echo $paraclinico['Paraclinico']['pl_hdl']; ?>&nbsp;</td>
		<td><?php echo $paraclinico['Paraclinico']['pl_colesterol_total']; ?>&nbsp;</td>
		<td><?php echo $paraclinico['Paraclinico']['pl_trigliceridos']; ?>&nbsp;</td>
		<td><?php echo $paraclinico['Paraclinico']['pl_ldl']; ?>&nbsp;</td>
		<td><?php echo $paraclinico['Paraclinico']['pl_orina']; ?>&nbsp;</td>
		<td><?php echo $paraclinico['Paraclinico']['pl_otros']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $paraclinico['Paraclinico']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $paraclinico['Paraclinico']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $paraclinico['Paraclinico']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $paraclinico['Paraclinico']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Paraclinico', true), array('action' => 'add')); ?></li>
	</ul>
</div>