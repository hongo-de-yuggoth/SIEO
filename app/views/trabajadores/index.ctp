<div class="trabajadores index">
	<h2><?php __('Trabajadores');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('id_empresa');?></th>
			<th><?php echo $this->Paginator->sort('nombre');?></th>
			<th><?php echo $this->Paginator->sort('tipo_doc');?></th>
			<th><?php echo $this->Paginator->sort('numero_doc');?></th>
			<th><?php echo $this->Paginator->sort('sexo');?></th>
			<th><?php echo $this->Paginator->sort('direccion');?></th>
			<th><?php echo $this->Paginator->sort('id_localidad');?></th>
			<th><?php echo $this->Paginator->sort('telefono_familiar');?></th>
			<th><?php echo $this->Paginator->sort('telefono_personal');?></th>
			<th><?php echo $this->Paginator->sort('fecha_nacimiento');?></th>
			<th><?php echo $this->Paginator->sort('cargo_desempeñar');?></th>
			<th><?php echo $this->Paginator->sort('nivel_estudio');?></th>
			<th><?php echo $this->Paginator->sort('eps');?></th>
			<th><?php echo $this->Paginator->sort('arp');?></th>
			<th><?php echo $this->Paginator->sort('estado_civil');?></th>
			<th><?php echo $this->Paginator->sort('id_religion');?></th>
			<th><?php echo $this->Paginator->sort('cant_hijos');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($trabajadores as $trabajador):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $trabajador['Trabajador']['id']; ?>&nbsp;</td>
		<td><?php echo $trabajador['Trabajador']['id_empresa']; ?>&nbsp;</td>
		<td><?php echo $trabajador['Trabajador']['nombre']; ?>&nbsp;</td>
		<td><?php echo $trabajador['Trabajador']['tipo_doc']; ?>&nbsp;</td>
		<td><?php echo $trabajador['Trabajador']['numero_doc']; ?>&nbsp;</td>
		<td><?php echo $trabajador['Trabajador']['sexo']; ?>&nbsp;</td>
		<td><?php echo $trabajador['Trabajador']['direccion']; ?>&nbsp;</td>
		<td><?php echo $trabajador['Trabajador']['id_localidad']; ?>&nbsp;</td>
		<td><?php echo $trabajador['Trabajador']['telefono_familiar']; ?>&nbsp;</td>
		<td><?php echo $trabajador['Trabajador']['telefono_personal']; ?>&nbsp;</td>
		<td><?php echo $trabajador['Trabajador']['fecha_nacimiento']; ?>&nbsp;</td>
		<td><?php echo $trabajador['Trabajador']['cargo_desempeñar']; ?>&nbsp;</td>
		<td><?php echo $trabajador['Trabajador']['nivel_estudio']; ?>&nbsp;</td>
		<td><?php echo $trabajador['Trabajador']['eps']; ?>&nbsp;</td>
		<td><?php echo $trabajador['Trabajador']['arp']; ?>&nbsp;</td>
		<td><?php echo $trabajador['Trabajador']['estado_civil']; ?>&nbsp;</td>
		<td><?php echo $trabajador['Trabajador']['id_religion']; ?>&nbsp;</td>
		<td><?php echo $trabajador['Trabajador']['cant_hijos']; ?>&nbsp;</td>
		<td><?php echo $trabajador['Trabajador']['created']; ?>&nbsp;</td>
		<td><?php echo $trabajador['Trabajador']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $trabajador['Trabajador']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $trabajador['Trabajador']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $trabajador['Trabajador']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $trabajador['Trabajador']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Trabajador', true), array('action' => 'add')); ?></li>
	</ul>
</div>