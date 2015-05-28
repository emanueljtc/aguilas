<div id="general">
	 
	<div class="col-lg-12">
		
		<div class="bloque"> 
			<div class="row">
			<div class="col col-sm-7">
				<?php echo $this->Html->image('../files/member/foto/'. $member['Member']['foto_dir'].'/'.'vga_'.$member['Member']['foto']); ?>
			</div>
			<div class="clol col-sm-5">

			<br>
				<h3>Datos</h3>
				<br>
				
				<strong>Nombre : <?php echo h($member['Member']['name']); ?> </strong> 
				<br>
				
				<strong>Cedula : <?php echo h($member['Member']['dni']); ?></strong>
				<br>
				<strong>Sexo : <?php echo h($member['Member']['sex']); ?></strong>
				<br>
				<strong>Edad : <?php echo h($member['Member']['age']); ?></strong>
				<br>
				<strong>Nacimiento : <?php echo h($member['Member']['born_date']); ?></strong>
				<br>
				<strong>Email : <?php echo h($member['Member']['email']); ?></strong>
				<br>
				<strong>Ciudad : <?php echo h($member['Member']['city']); ?></strong>
				<br>
				<strong>Direccion : <?php echo h($member['Member']['address']); ?></strong>
				<br>
				<strong>Bautizado : <?php echo h($member['Member']['baptism']); ?></strong>
				<br>
				<strong>Añadido : <?php echo h($member['Member']['created']); ?></strong>
			</div>
	
	</div>
	
	<div class="col-lg-9">

		<br>
		<center>
		<?php if (!empty($member['Baptism'])): ?>
		<table class="table table-hover">
		<tr class="success">
			
			
			<th><?php echo __('Bautismo'); ?></th>
			<th><?php echo __('Ministro'); ?></th>
			<th><?php echo __('Lugar'); ?></th>
			
			<th class="actions"><?php echo __('Opciones'); ?></th>
		</tr>
		<?php foreach ($member['Baptism'] as $baptism): ?>
			<tr >
				
				
				<td ><?php echo $baptism['date_baptism']; ?></td>
				<td><?php echo $baptism['responsible']; ?></td>
				<td><?php echo $baptism['place']; ?></td>
				
				<td class="actions">
					<?php echo $this->Html->link(__(''), array('controller' => 'baptisms', 'action' => 'view', $baptism['id']),array('class' => 'glyphicon glyphicon-search')); ?>
					<?php echo $this->Html->link(__(''), array('controller' => 'baptisms', 'action' => 'edit', $baptism['id']),array('class' => 'glyphicon glyphicon-pencil')); ?>
					<?php echo $this->Form->postLink(__(''), array('controller' => 'baptisms', 'action' => 'delete', $baptism['id']), array('class'=>'glyphicon glyphicon-remove'), __('Are you sure you want to delete # %s?', $baptism['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
		</center>
	<?php endif; ?>

		

	</div>
	<br>
</div>
		<div class="btn-group btn-group-justified">
		
		
			<?php echo $this->Html->link(__('Editar Miembro'), array('action' => 'edit', $member['Member']['id']), array('class' => 'btn btn-info')); ?> 
			<?php echo $this->Html->link(__('Constancia de Membresia'), array('action' => 'view', $member['Member']['id'].'.pdf' ),array('class' => 'btn btn-sm btn-danger')); ?>
			<?php echo $this->Html->link(__('Lista Miembro'), array('action' => 'index'), array('class' => 'btn btn-primary')); ?> 
			
		
	</div>
</div>