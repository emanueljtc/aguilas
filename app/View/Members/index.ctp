<div id="general">
	<?php echo $this->element('b1');?>
	<br>
	<div class="col-lg-12">
			
		<table class="table table-striped table-hover">
		<thead>
		<tr class="success">
				<th><?php echo $this->Paginator->sort('Foto'); ?></th>
				<th><?php echo $this->Paginator->sort('Cedula'); ?></th>
				<th><?php echo $this->Paginator->sort('Nombre'); ?></th>
				
				<th><?php echo $this->Paginator->sort('Edad'); ?></th>
				<th><?php echo $this->Paginator->sort('Telefono'); ?></th>
				<th><?php echo $this->Paginator->sort('Registro'); ?></th>
				<th class="actions"><?php echo __('Opciones'); ?></th>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($members as $member): ?>
		<tr>
			<td><?php echo $this->Html->image('../files/member/foto/'. $member['Member']['foto_dir'].'/'.'thumb_'.$member['Member']['foto']); ?></td>
			<td><?php echo h($member['Member']['dni']); ?>&nbsp;</td>
			<td><?php echo h($member['Member']['name']); ?>&nbsp;</td>
			
			<td><?php echo h($member['Member']['age']); ?>&nbsp;</td>
			
			<td><?php echo h($member['Member']['phone']); ?>&nbsp;</td>
			
			<td><?php echo h($member['Member']['created']); ?>&nbsp;</td>
		
			<td class="actions">
				<?php echo $this->Html->link(__(''), array('action' => 'view', $member['Member']['id']),array('class' => 'glyphicon glyphicon-search')); ?>
				<?php echo $this->Html->link(__('I'), array('action' => 'view', $member['Member']['id'].'.pdf' ),array('class' => 'glyphicon glyphicon-print')); ?>
				<?php echo $this->Html->link(__(''), array('action' => 'edit', $member['Member']['id']),array('class' => 'glyphicon glyphicon-pencil')); ?>
				<?php echo $this->Form->postLink(__(''), array('action' => 'delete', $member['Member']['id']), array('class' => 'glyphicon glyphicon-remove'), __('Esta usted seguro de eliminar a %s?', $member['Member']['name'])); ?>
			</td>
		</tr>
		<?php endforeach; ?>
			</tbody>
			</table>
	</div>
			<center>
			<paginador><!-- etiqueta personalidad-->
				<?php echo $this->element('paginador');?>
			</paginador>
			</center>
		</div>
	<div class="btn-group btn-group-justified">
		
			<?php echo $this->Html->link(__('Nuevo Miembro'), array('action' => 'add'), array('class' => 'btn btn-info')); ?>
			<?php echo $this->Html->link(__('Lista Bautismos'), array('controller' => 'baptisms', 'action' => 'index'), array('class' => 'btn btn-danger')); ?> 
			<?php echo $this->Html->link(__('Nuevo Bautismo'), array('controller' => 'baptisms', 'action' => 'add'), array('class' => 'btn btn-primary')); ?> 
		
	</div>
</div>