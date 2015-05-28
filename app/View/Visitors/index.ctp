<div id="general">
	<?php echo $this->element('b3');?>
	<div class="col-lg-12">
		
		<table class="table table-striped table-hover">
		<thead>
		<tr class="success">
				
				<th><?php echo $this->Paginator->sort('Nombre'); ?></th>
				<th><?php echo $this->Paginator->sort('Telefono'); ?></th>
				<th><?php echo $this->Paginator->sort('Profesion'); ?></th>
				<th><?php echo $this->Paginator->sort('Visita'); ?></th>
				<th class="actions"><?php echo __('Opciones'); ?></th>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($visitors as $visitor): ?>
		<tr>
			
			<td><?php echo h($visitor['Visitor']['name']); ?>&nbsp;</td>
			<td><?php echo h($visitor['Visitor']['phone']); ?>&nbsp;</td>
			<td><?php echo h($visitor['Visitor']['profession']); ?>&nbsp;</td>
			<td><?php echo h($visitor['Visitor']['created']); ?>&nbsp;</td>
			
			<td class="actions">
				<?php echo $this->Html->link(__(''), array('action' => 'view', $visitor['Visitor']['id']),array('class' => 'glyphicon glyphicon-search')); ?>
				<?php echo $this->Html->link(__(''), array('action' => 'edit', $visitor['Visitor']['id']),array('class' => 'glyphicon glyphicon-pencil')); ?>
				<?php echo $this->Form->postLink(__(''), array('action' => 'delete', $visitor['Visitor']['id']), array('class' => 'glyphicon glyphicon-remove'), __('Estas Seguro de Eliminar  # %s?', $visitor['Visitor']['id'])); ?>
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
				
	
					<?php echo $this->Html->link(__('Lista Visitas'), array('action' => 'index'), array('class' => 'btn btn-info')); ?>
					<?php echo $this->Html->link(__('Lista Miembros'), array('controller' => 'members', 'action' => 'index'), array('class' => 'btn btn-danger')); ?> 
					<?php echo $this->Html->link(__('Nuevo Visitante'), array('action' => 'add'), array('class' => 'btn btn-primary')); ?> 
	</div>
</div>