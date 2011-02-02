<div class="users view">
<h2><?php  __('User');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nombre'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['nombre']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Group'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Username'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['username']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Password'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['password']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User', true), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete User', true), array('action' => 'delete', $user['User']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups', true), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group', true), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hcos', true), array('controller' => 'hcos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hco', true), array('controller' => 'hcos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Hcos');?></h3>
	<?php if (!empty($user['Hco'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Id Trabajador'); ?></th>
		<th><?php __('Id Empresa'); ?></th>
		<th><?php __('Tipo Examen'); ?></th>
		<th><?php __('Motivo Consulta'); ?></th>
		<th><?php __('Revision Sistemas'); ?></th>
		<th><?php __('Id Antecedentes'); ?></th>
		<th><?php __('Id Examen Fisico'); ?></th>
		<th><?php __('Id Organos Sistemas'); ?></th>
		<th><?php __('Id Paraclinicos'); ?></th>
		<th><?php __('Id Pruebas Enfermedad Prof'); ?></th>
		<th><?php __('Concepto Medico Ocupacional'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Hco'] as $hco):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $hco['id'];?></td>
			<td><?php echo $hco['user_id'];?></td>
			<td><?php echo $hco['id_trabajador'];?></td>
			<td><?php echo $hco['id_empresa'];?></td>
			<td><?php echo $hco['tipo_examen'];?></td>
			<td><?php echo $hco['motivo_consulta'];?></td>
			<td><?php echo $hco['revision_sistemas'];?></td>
			<td><?php echo $hco['id_antecedentes'];?></td>
			<td><?php echo $hco['id_examen_fisico'];?></td>
			<td><?php echo $hco['id_organos_sistemas'];?></td>
			<td><?php echo $hco['id_paraclinicos'];?></td>
			<td><?php echo $hco['id_pruebas_enfermedad_prof'];?></td>
			<td><?php echo $hco['concepto_medico_ocupacional'];?></td>
			<td><?php echo $hco['created'];?></td>
			<td><?php echo $hco['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'hcos', 'action' => 'view', $hco['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'hcos', 'action' => 'edit', $hco['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'hcos', 'action' => 'delete', $hco['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $hco['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Hco', true), array('controller' => 'hcos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
