<div id="general">
		<?php echo $this->element('b2');?>
		<br>
		
		<div class="col-lg-12">
			
			<table class="table table-striped table-hover">
			<thead>
			<tr class="success">
					
					<th><?php echo $this->Paginator->sort('Miembro'); ?></th>
					<th><?php echo $this->Paginator->sort('Fecha Bautismo'); ?></th>
					<th><?php echo $this->Paginator->sort('Responsable'); ?></th>
					<th><?php echo $this->Paginator->sort('Lugar'); ?></th>
					
					<th class="actions"><?php echo __('Opciones'); ?></th>
			</tr>
			</thead>
			<tbody>
			<?php foreach ($baptisms as $baptism): ?>
				<tr>
					
					<td>
					<?php echo $this->Html->link($baptism['Member']['name'], array('controller' => 'members', 'action' => 'view', $baptism['Member']['id'])); ?>
					</td>
					<td><?php echo h($baptism['Baptism']['date_baptism']); ?>&nbsp;</td>
					<td><?php echo h($baptism['Baptism']['responsible']); ?>&nbsp;</td>
					<td><?php echo h($baptism['Baptism']['place']); ?>&nbsp;</td>
					
					<td class="actions">
						<?php echo $this->Html->link(__(''), array('action' => 'view', $baptism['Baptism']['id']),array('class' => 'glyphicon glyphicon-search')); ?>
						<?php echo $this->Html->link(__(''), array('action' => 'edit', $baptism['Baptism']['id']),array('class' => 'glyphicon glyphicon-pencil')); ?>
						<?php echo $this->Form->postLink(__(''), array('action' => 'delete', $baptism['Baptism']['id']), array('class' => 'glyphicon glyphicon-remove'), __('Esta usted Seguro de Eliminar a %s?', $baptism['Member']['name'])); ?>
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
		
			<?php echo $this->Html->link(__('Nuevo Bautismo'), array('action' => 'add'), array('class' => 'btn btn-info')); ?>
			<?php echo $this->Html->link(__('Lista Miembros'), array('controller' => 'members', 'action' => 'index'), array('class' => 'btn btn-danger')); ?> 
			<?php echo $this->Html->link(__('Nuevo Miembro'), array('controller' => 'members', 'action' => 'add'), array('class' => 'btn btn-primary')); ?> 
		
	</div>
</div>