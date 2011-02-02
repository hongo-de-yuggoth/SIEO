<div class="examenesfisicos index">
	<h2><?php __('Examenesfisicos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('id_hco');?></th>
			<th><?php echo $this->Paginator->sort('frec_cardiaca');?></th>
			<th><?php echo $this->Paginator->sort('frec_respiratoria');?></th>
			<th><?php echo $this->Paginator->sort('tension_arterial_a');?></th>
			<th><?php echo $this->Paginator->sort('tension_arterial_b');?></th>
			<th><?php echo $this->Paginator->sort('peso');?></th>
			<th><?php echo $this->Paginator->sort('talla');?></th>
			<th><?php echo $this->Paginator->sort('imc');?></th>
			<th><?php echo $this->Paginator->sort('lateralidad');?></th>
			<th><?php echo $this->Paginator->sort('practica_deportiva');?></th>
			<th><?php echo $this->Paginator->sort('cant_semanal');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($examenesfisicos as $examenfisico):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $examenfisico['Examenfisico']['id']; ?>&nbsp;</td>
		<td><?php echo $examenfisico['Examenfisico']['id_hco']; ?>&nbsp;</td>
		<td><?php echo $examenfisico['Examenfisico']['frec_cardiaca']; ?>&nbsp;</td>
		<td><?php echo $examenfisico['Examenfisico']['frec_respiratoria']; ?>&nbsp;</td>
		<td><?php echo $examenfisico['Examenfisico']['tension_arterial_a']; ?>&nbsp;</td>
		<td><?php echo $examenfisico['Examenfisico']['tension_arterial_b']; ?>&nbsp;</td>
		<td><?php echo $examenfisico['Examenfisico']['peso']; ?>&nbsp;</td>
		<td><?php echo $examenfisico['Examenfisico']['talla']; ?>&nbsp;</td>
		<td><?php echo $examenfisico['Examenfisico']['imc']; ?>&nbsp;</td>
		<td><?php echo $examenfisico['Examenfisico']['lateralidad']; ?>&nbsp;</td>
		<td><?php echo $examenfisico['Examenfisico']['practica_deportiva']; ?>&nbsp;</td>
		<td><?php echo $examenfisico['Examenfisico']['cant_semanal']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $examenfisico['Examenfisico']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $examenfisico['Examenfisico']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $examenfisico['Examenfisico']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $examenfisico['Examenfisico']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Examenfisico', true), array('action' => 'add')); ?></li>
	</ul>
</div>