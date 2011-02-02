<div class="enfermedadesprofesionales index">
	<h2><?php __('Enfermedadesprofesionales');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('id_hco');?></th>
			<th><?php echo $this->Paginator->sort('empresa');?></th>
			<th><?php echo $this->Paginator->sort('diagnostico');?></th>
			<th><?php echo $this->Paginator->sort('calificacion');?></th>
			<th><?php echo $this->Paginator->sort('indemnizacion');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($enfermedadesprofesionales as $enfermedadprofesional):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $enfermedadprofesional['Enfermedadprofesional']['id']; ?>&nbsp;</td>
		<td><?php echo $enfermedadprofesional['Enfermedadprofesional']['id_hco']; ?>&nbsp;</td>
		<td><?php echo $enfermedadprofesional['Enfermedadprofesional']['empresa']; ?>&nbsp;</td>
		<td><?php echo $enfermedadprofesional['Enfermedadprofesional']['diagnostico']; ?>&nbsp;</td>
		<td><?php echo $enfermedadprofesional['Enfermedadprofesional']['calificacion']; ?>&nbsp;</td>
		<td><?php echo $enfermedadprofesional['Enfermedadprofesional']['indemnizacion']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $enfermedadprofesional['Enfermedadprofesional']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $enfermedadprofesional['Enfermedadprofesional']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $enfermedadprofesional['Enfermedadprofesional']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $enfermedadprofesional['Enfermedadprofesional']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Enfermedadprofesional', true), array('action' => 'add')); ?></li>
	</ul>
</div>