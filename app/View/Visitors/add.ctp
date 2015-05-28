<div id="general">
	<center>
		<h3>Añadir Visitante </h3>
	</center>
	<div class="form-horizontal">
		<?php echo $this->Form->create('Visitor' , array('type'=>'file', 'novalidate'=>'novalidate' )); ?>
		
				 <div class="form-group">
				 	 <label class="control-label col-xs-3" >Nombre Completo:</label>
					 	 <div class="col-xs-7">
				        
							<?php echo $this->Form->input('name', array(
								'label'=>'','placeholder' => 'Nombre Completo','class'=>'form-control'
							)); ?>
						 </div>
					<label class="control-label col-xs-3" >Direcci&oacute;n:</label>
				 	 <div class="col-xs-7">
			        
						<?php echo $this->Form->input('address', array(
							'label'=>'','placeholder' => 'Direccion de Hab.','class'=>'form-control'
						)); ?>
					</div>
					<label class="control-label col-xs-3" >Correo Electr&oacute;nico:</label>
				 	 <div class="col-xs-7">
			        
						<?php echo $this->Form->input('email', array(
							'label'=>'','placeholder' => 'Correo Electronico','class'=>'form-control'
						)); ?>
					</div>
					<label class="control-label col-xs-3" >Telefono:</label>
				 	 <div class="col-xs-7">
			        
						<?php echo $this->Form->input('phone', array(
							'label'=>'','placeholder' => 'Telefono','class'=>'form-control'
						)); ?>
					</div>
					<label class="control-label col-xs-3" >Profesi&oacute;n:</label>
				 	 <div class="col-xs-7">
			        
						<?php echo $this->Form->input('profession', array(
							'label'=>'','placeholder' => 'Profesion','class'=>'form-control'
						)); ?>
					</div>
					<label class="control-label col-xs-3" >Estado Civil:</label>
				 	 <div class="col-xs-7">
			        
						<?php echo $this->Form->input('marital_status', array(
							'label'=>'','placeholder' => 'Estado Civil','class'=>'form-control'
						)); ?>
					</div>
					<label class="control-label col-xs-3" >Iglesia:</label>
				 	 <div class="col-xs-7">
			        
						<?php echo $this->Form->input('church', array(
							'label'=>'','placeholder' => 'Iglesia donde se congrega','class'=>'form-control'
						)); ?>
					</div>
					<label class="control-label col-xs-3" >Raz&oacute;n:</label>
				 	 <div class="col-xs-7">
			        
						<?php echo $this->Form->input('reason', array(
							'label'=>'','placeholder' => 'Motivo de Oracion','class'=>'form-control'
						)); ?>
					</div>
					
				</div>
		<center><input type="submit" value="Guardar" class="btn btn-info">
			<input type="reset" value="Limpiar" class="btn btn-danger"></center>
	</div>
	<br>
	<div class="btn-group btn-group-justified">
				
	
					<?php echo $this->Html->link(__('Lista Visitas'), array('action' => 'index'), array('class' => 'btn btn-info')); ?>
					<?php echo $this->Html->link(__('Lista Miembros'), array('controller' => 'members', 'action' => 'index'), array('class' => 'btn btn-danger')); ?> 
					<?php echo $this->Html->link(__('Nuevo Miembro'), array('controller' => 'members', 'action' => 'add'), array('class' => 'btn btn-primary')); ?> 
	</div>
</div>