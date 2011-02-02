<div class="pruebasenfermedadesprofesionales index">
	<h2><?php __('Pruebasenfermedadesprofesionales');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('id_hco');?></th>
			<th><?php echo $this->Paginator->sort('thinnel');?></th>
			<th><?php echo $this->Paginator->sort('phalen');?></th>
			<th><?php echo $this->Paginator->sort('flinkestein');?></th>
			<th><?php echo $this->Paginator->sort('wells');?></th>
			<th><?php echo $this->Paginator->sort('movilidad_columna');?></th>
			<th><?php echo $this->Paginator->sort('laessege');?></th>
			<th><?php echo $this->Paginator->sort('rombert');?></th>
			<th><?php echo $this->Paginator->sort('vertigo');?></th>
			<th><?php echo $this->Paginator->sort('hallazgos');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($pruebasenfermedadesprofesionales as $pruebaenfermedadprofesional):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $pruebaenfermedadprofesional['Pruebaenfermedadprofesional']['id']; ?>&nbsp;</td>
		<td><?php echo $pruebaenfermedadprofesional['Pruebaenfermedadprofesional']['id_hco']; ?>&nbsp;</td>
		<td><?php echo $pruebaenfermedadprofesional['Pruebaenfermedadprofesional']['thinnel']; ?>&nbsp;</td>
		<td><?php echo $pruebaenfermedadprofesional['Pruebaenfermedadprofesional']['phalen']; ?>&nbsp;</td>
		<td><?php echo $pruebaenfermedadprofesional['Pruebaenfermedadprofesional']['flinkestein']; ?>&nbsp;</td>
		<td><?php echo $pruebaenfermedadprofesional['Pruebaenfermedadprofesional']['wells']; ?>&nbsp;</td>
		<td><?php echo $pruebaenfermedadprofesional['Pruebaenfermedadprofesional']['movilidad_columna']; ?>&nbsp;</td>
		<td><?php echo $pruebaenfermedadprofesional['Pruebaenfermedadprofesional']['laessege']; ?>&nbsp;</td>
		<td><?php echo $pruebaenfermedadprofesional['Pruebaenfermedadprofesional']['rombert']; ?>&nbsp;</td>
		<td><?php echo $pruebaenfermedadprofesional['Pruebaenfermedadprofesional']['vertigo']; ?>&nbsp;</td>
		<td><?php echo $pruebaenfermedadprofesional['Pruebaenfermedadprofesional']['hallazgos']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $pruebaenfermedadprofesional['Pruebaenfermedadprofesional']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $pruebaenfermedadprofesional['Pruebaenfermedadprofesional']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $pruebaenfermedadprofesional['Pruebaenfermedadprofesional']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $pruebaenfermedadprofesional['Pruebaenfermedadprofesional']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Pruebaenfermedadprofesional', true), array('action' => 'add')); ?></li>
	</ul>
</div>