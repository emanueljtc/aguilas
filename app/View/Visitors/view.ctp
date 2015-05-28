<div id="general">
	<div class="col-lg-12">
		<table class="table table-striped table-hover">
				<tr class="success">
				   <td>	
					   <strong><?php echo __('Nombre'); ?></strong>
			
					</td>
					<td>
						<strong><?php echo __('Direccion'); ?></strong>
						

					</td>
					<td>
						<strong><?php echo __('Correo'); ?></strong>
						

					</td>
					<td>
						<strong><?php echo __('Estado Civil'); ?></strong>
							
						

					</td>
					<td>
						<strong><?php echo __('Iglesia'); ?></strong>
							
						

					</td>
					<td>
						<strong><?php echo __('Motivo'); ?></strong>
							
						

					</td>
					<td class="actions"><?php echo __('Opciones'); ?></td>
				</tr>
				<th>
							
							<?php echo $this->Html->link($visitor['Visitor']['name'], array('controller' => 'members', 'action' => 'view', $visitor['Visitor']['id'])); ?>
								&nbsp;
							
				</th>
				<th>
					
							<?php echo h($visitor['Visitor']['address']); ?>
							&nbsp;
						
				</th>
				<th>
							<?php echo h($visitor['Visitor']['email']); ?>
							&nbsp;
				</th>
				<th>
					
						    <?php echo h($visitor['Visitor']['marital_status']); ?>
							&nbsp;
				</th>
				<th>
					
						    <?php echo h($visitor['Visitor']['church']); ?>
							&nbsp;
				</th>
					<th>
					
						    <?php echo h($visitor['Visitor']['reason']); ?>
							&nbsp;
				</th>
				<th class="actions">
				<?php echo $this->Html->link(__(''), array('action' => 'view', $visitor['Visitor']['id']),array('class' => 'glyphicon glyphicon-search')); ?>
				<?php echo $this->Html->link(__(''), array('action' => 'edit', $visitor['Visitor']['id']),array('class' => 'glyphicon glyphicon-pencil')); ?>
				<?php echo $this->Form->postLink(__(''), array('action' => 'delete', $visitor['Visitor']['id']), array('class' => 'glyphicon glyphicon-remove'), __('Estas Seguro de Eliminar  # %s?', $visitor['Visitor']['id'])); ?>
				</th>

			</table>
	 
	</div>
	
	<div class="btn-group btn-group-justified">
				
	
					<?php echo $this->Html->link(__('Lista Visitas'), array('action' => 'index'), array('class' => 'btn btn-info')); ?>
					<?php echo $this->Html->link(__('Lista Miembros'), array('controller' => 'members', 'action' => 'index'), array('class' => 'btn btn-danger')); ?> 
					<?php echo $this->Html->link(__('Nuevo Visitante'), array('action' => 'add'), array('class' => 'btn btn-primary')); ?> 
	</div>
</div>