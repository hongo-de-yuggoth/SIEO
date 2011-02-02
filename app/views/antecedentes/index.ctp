<div class="antecedentes index">
	<h2><?php __('Antecedentes');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('id_hco');?></th>
			<th><?php echo $this->Paginator->sort('patologico');?></th>
			<th><?php echo $this->Paginator->sort('quirurgico');?></th>
			<th><?php echo $this->Paginator->sort('traumaticos');?></th>
			<th><?php echo $this->Paginator->sort('farmacologico');?></th>
			<th><?php echo $this->Paginator->sort('alergicos');?></th>
			<th><?php echo $this->Paginator->sort('frec_mes_alcohol');?></th>
			<th><?php echo $this->Paginator->sort('tabaquismo');?></th>
			<th><?php echo $this->Paginator->sort('cant_cigarrillos');?></th>
			<th><?php echo $this->Paginator->sort('familiar');?></th>
			<th><?php echo $this->Paginator->sort('inmunologico');?></th>
			<th><?php echo $this->Paginator->sort('gin_g');?></th>
			<th><?php echo $this->Paginator->sort('gin_p');?></th>
			<th><?php echo $this->Paginator->sort('gin_a');?></th>
			<th><?php echo $this->Paginator->sort('gin_m');?></th>
			<th><?php echo $this->Paginator->sort('gin_gem');?></th>
			<th><?php echo $this->Paginator->sort('gin_c');?></th>
			<th><?php echo $this->Paginator->sort('gin_fum');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($antecedentes as $antecedente):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $antecedente['Antecedente']['id']; ?>&nbsp;</td>
		<td><?php echo $antecedente['Antecedente']['id_hco']; ?>&nbsp;</td>
		<td><?php echo $antecedente['Antecedente']['patologico']; ?>&nbsp;</td>
		<td><?php echo $antecedente['Antecedente']['quirurgico']; ?>&nbsp;</td>
		<td><?php echo $antecedente['Antecedente']['traumaticos']; ?>&nbsp;</td>
		<td><?php echo $antecedente['Antecedente']['farmacologico']; ?>&nbsp;</td>
		<td><?php echo $antecedente['Antecedente']['alergicos']; ?>&nbsp;</td>
		<td><?php echo $antecedente['Antecedente']['frec_mes_alcohol']; ?>&nbsp;</td>
		<td><?php echo $antecedente['Antecedente']['tabaquismo']; ?>&nbsp;</td>
		<td><?php echo $antecedente['Antecedente']['cant_cigarrillos']; ?>&nbsp;</td>
		<td><?php echo $antecedente['Antecedente']['familiar']; ?>&nbsp;</td>
		<td><?php echo $antecedente['Antecedente']['inmunologico']; ?>&nbsp;</td>
		<td><?php echo $antecedente['Antecedente']['gin_g']; ?>&nbsp;</td>
		<td><?php echo $antecedente['Antecedente']['gin_p']; ?>&nbsp;</td>
		<td><?php echo $antecedente['Antecedente']['gin_a']; ?>&nbsp;</td>
		<td><?php echo $antecedente['Antecedente']['gin_m']; ?>&nbsp;</td>
		<td><?php echo $antecedente['Antecedente']['gin_gem']; ?>&nbsp;</td>
		<td><?php echo $antecedente['Antecedente']['gin_c']; ?>&nbsp;</td>
		<td><?php echo $antecedente['Antecedente']['gin_fum']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $antecedente['Antecedente']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $antecedente['Antecedente']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $antecedente['Antecedente']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $antecedente['Antecedente']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Antecedente', true), array('action' => 'add')); ?></li>
	</ul>
</div>