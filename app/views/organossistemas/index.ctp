<div class="organossistemas index">
	<h2><?php __('Organossistemas');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('id_hco');?></th>
			<th><?php echo $this->Paginator->sort('cc_configuracion');?></th>
			<th><?php echo $this->Paginator->sort('cc_odontologico');?></th>
			<th><?php echo $this->Paginator->sort('oft_externo');?></th>
			<th><?php echo $this->Paginator->sort('oft_fundoscopia');?></th>
			<th><?php echo $this->Paginator->sort('auditivo');?></th>
			<th><?php echo $this->Paginator->sort('respiratorio');?></th>
			<th><?php echo $this->Paginator->sort('cardiaco');?></th>
			<th><?php echo $this->Paginator->sort('gastrointestinal');?></th>
			<th><?php echo $this->Paginator->sort('genital');?></th>
			<th><?php echo $this->Paginator->sort('extremidades');?></th>
			<th><?php echo $this->Paginator->sort('neurologico');?></th>
			<th><?php echo $this->Paginator->sort('circulatorio');?></th>
			<th><?php echo $this->Paginator->sort('mental');?></th>
			<th><?php echo $this->Paginator->sort('ampliacion');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($organossistemas as $organosistema):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $organosistema['Organosistema']['id']; ?>&nbsp;</td>
		<td><?php echo $organosistema['Organosistema']['id_hco']; ?>&nbsp;</td>
		<td><?php echo $organosistema['Organosistema']['cc_configuracion']; ?>&nbsp;</td>
		<td><?php echo $organosistema['Organosistema']['cc_odontologico']; ?>&nbsp;</td>
		<td><?php echo $organosistema['Organosistema']['oft_externo']; ?>&nbsp;</td>
		<td><?php echo $organosistema['Organosistema']['oft_fundoscopia']; ?>&nbsp;</td>
		<td><?php echo $organosistema['Organosistema']['auditivo']; ?>&nbsp;</td>
		<td><?php echo $organosistema['Organosistema']['respiratorio']; ?>&nbsp;</td>
		<td><?php echo $organosistema['Organosistema']['cardiaco']; ?>&nbsp;</td>
		<td><?php echo $organosistema['Organosistema']['gastrointestinal']; ?>&nbsp;</td>
		<td><?php echo $organosistema['Organosistema']['genital']; ?>&nbsp;</td>
		<td><?php echo $organosistema['Organosistema']['extremidades']; ?>&nbsp;</td>
		<td><?php echo $organosistema['Organosistema']['neurologico']; ?>&nbsp;</td>
		<td><?php echo $organosistema['Organosistema']['circulatorio']; ?>&nbsp;</td>
		<td><?php echo $organosistema['Organosistema']['mental']; ?>&nbsp;</td>
		<td><?php echo $organosistema['Organosistema']['ampliacion']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $organosistema['Organosistema']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $organosistema['Organosistema']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $organosistema['Organosistema']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $organosistema['Organosistema']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Organosistema', true), array('action' => 'add')); ?></li>
	</ul>
</div>