<div id="general">	
	
	<div class="col-lg-12">
		<table class="table table-striped table-hover">
				<tr class="success">
				   <td>	
					   <strong><?php echo __('Miembro'); ?></strong>
			
					</td>
					<td>
						<strong><?php echo __('Fecha Bautismo'); ?></strong>
						

					</td>
					<td>
						<strong><?php echo __('Responsable'); ?></strong>
						

					</td>
					<td>
						<strong><?php echo __('Lugar'); ?></strong>
							
						

					</td>
				</tr>
				<th>
							
							<?php echo $this->Html->link($baptism['Member']['name'], array('controller' => 'members', 'action' => 'view', $baptism['Member']['id'])); ?>
								&nbsp;
							
				</th>
				<th>
					
							<?php echo h($baptism['Baptism']['date_baptism']); ?>
							&nbsp;
						
				</th>
				<th>
							<?php echo h($baptism['Baptism']['responsible']); ?>
							&nbsp;
				</th>
				<th>
					
						    <?php echo h($baptism['Baptism']['place']); ?>
							&nbsp;
				</th>

			</table>
	 
	</div>
	<div class="btn-group btn-group-justified">
		
			<?php echo $this->Html->link(__('Nuevo Bautismo'), array('action' => 'add'), array('class' => 'btn btn-info')); ?>
			<?php echo $this->Html->link(__('Lista Miembros'), array('controller' => 'members', 'action' => 'index'), array('class' => 'btn btn-danger')); ?> 
			<?php echo $this->Html->link(__('Nuevo Miembro'), array('controller' => 'members', 'action' => 'add'), array('class' => 'btn btn-primary')); ?> 
		
	</div>
</div>