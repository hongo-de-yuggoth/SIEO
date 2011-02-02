<div class="hcos index">
	<h2><?php __('Hcos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('id_trabajador');?></th>
			<th><?php echo $this->Paginator->sort('id_empresa');?></th>
			<th><?php echo $this->Paginator->sort('tipo_examen');?></th>
			<th><?php echo $this->Paginator->sort('motivo_consulta');?></th>
			<th><?php echo $this->Paginator->sort('revision_sistemas');?></th>
			<th><?php echo $this->Paginator->sort('id_antecedentes');?></th>
			<th><?php echo $this->Paginator->sort('id_examen_fisico');?></th>
			<th><?php echo $this->Paginator->sort('id_organos_sistemas');?></th>
			<th><?php echo $this->Paginator->sort('id_paraclinicos');?></th>
			<th><?php echo $this->Paginator->sort('id_pruebas_enfermedad_prof');?></th>
			<th><?php echo $this->Paginator->sort('concepto_medico_ocupacional');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($hcos as $hco):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $hco['Hco']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($hco['User']['id'], array('controller' => 'users', 'action' => 'view', $hco['User']['id'])); ?>
		</td>
		<td><?php echo $hco['Hco']['id_trabajador']; ?>&nbsp;</td>
		<td><?php echo $hco['Hco']['id_empresa']; ?>&nbsp;</td>
		<td><?php echo $hco['Hco']['tipo_examen']; ?>&nbsp;</td>
		<td><?php echo $hco['Hco']['motivo_consulta']; ?>&nbsp;</td>
		<td><?php echo $hco['Hco']['revision_sistemas']; ?>&nbsp;</td>
		<td><?php echo $hco['Hco']['id_antecedentes']; ?>&nbsp;</td>
		<td><?php echo $hco['Hco']['id_examen_fisico']; ?>&nbsp;</td>
		<td><?php echo $hco['Hco']['id_organos_sistemas']; ?>&nbsp;</td>
		<td><?php echo $hco['Hco']['id_paraclinicos']; ?>&nbsp;</td>
		<td><?php echo $hco['Hco']['id_pruebas_enfermedad_prof']; ?>&nbsp;</td>
		<td><?php echo $hco['Hco']['concepto_medico_ocupacional']; ?>&nbsp;</td>
		<td><?php echo $hco['Hco']['created']; ?>&nbsp;</td>
		<td><?php echo $hco['Hco']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $hco['Hco']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $hco['Hco']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $hco['Hco']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $hco['Hco']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Hco', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>