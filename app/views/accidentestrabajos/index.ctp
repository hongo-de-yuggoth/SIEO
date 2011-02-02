<div class="accidentestrabajos index">
	<h2><?php __('Accidentestrabajos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('id_hco');?></th>
			<th><?php echo $this->Paginator->sort('empresa');?></th>
			<th><?php echo $this->Paginator->sort('fecha');?></th>
			<th><?php echo $this->Paginator->sort('lesion');?></th>
			<th><?php echo $this->Paginator->sort('secuelas');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($accidentestrabajos as $accidentetrabajo):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $accidentetrabajo['Accidentetrabajo']['id']; ?>&nbsp;</td>
		<td><?php echo $accidentetrabajo['Accidentetrabajo']['id_hco']; ?>&nbsp;</td>
		<td><?php echo $accidentetrabajo['Accidentetrabajo']['empresa']; ?>&nbsp;</td>
		<td><?php echo $accidentetrabajo['Accidentetrabajo']['fecha']; ?>&nbsp;</td>
		<td><?php echo $accidentetrabajo['Accidentetrabajo']['lesion']; ?>&nbsp;</td>
		<td><?php echo $accidentetrabajo['Accidentetrabajo']['secuelas']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $accidentetrabajo['Accidentetrabajo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $accidentetrabajo['Accidentetrabajo']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $accidentetrabajo['Accidentetrabajo']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $accidentetrabajo['Accidentetrabajo']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Accidentetrabajo', true), array('action' => 'add')); ?></li>
	</ul>
</div>