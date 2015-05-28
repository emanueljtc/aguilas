<div id="general"> 
	<center>
		<br>
			<h3>Editar Bautismo</h3>
		<br>
	</center>	
	<div class="form-horizontal">
	<?php echo $this->Form->create('Baptism'); ?>
		<div class="form-group">
		<fieldset>
			<?php echo $this->Form->input('id'); ?>
				<label class="control-label col-xs-3" >Miembro:</label>
			        <div class="col-xs-7">
			        
						<?php echo $this->Form->input('member_id', array('label'=>'','class'=>'form-control'
						)); ?>
					</div>
					<label class="control-label col-xs-3" >Fecha de Bautismo:</label>
			        	<div class="col-xs-9">
		       	 		<br>
		          			 <?php
								$meses = array( 
									'01'=>'Enero',
									'02'=>'Febrero',
									'03'=>'Marzo',
									'04'=>'Abril',
									'05'=>'Mayo',
									'06'=>'Junio',
									'07'=>'Julio',
									'08'=>'Agosto',
									'09'=>'Septiembre',
									'10'=>'Octubre',
									'11'=>'Noviembre',
									'12'=>'Diciembre',
									); 
								echo $this->Form->input('date_baptism', array(
									    'label' => ' ',
									    'dateFormat' => 'DMY',
									    'minYear' => date('Y') - 95,//aqui se configura la edad limite de miembro
									    'maxYear' => date('Y') - 0,
									    'monthNames' => $meses
									));
							?>
		        		</div>
					<label class="control-label col-xs-3" >Responsable:</label>
			        <div class="col-xs-7">
			        
						<?php echo $this->Form->input('responsible', array('label'=>'','class'=>'form-control'
						)); ?>
					</div>
					<label class="control-label col-xs-3" >Lugar:</label>
			        <div class="col-xs-7">
			        
						<?php echo $this->Form->input('place', array('label'=>'','class'=>'form-control'
						)); ?>
					</div>
					</fieldset>
					<br>
					<center>
					<input type="submit" value="Actualizar" class="btn btn-info">
					<input type="reset" value="Limpiar" class="btn btn-danger">
					</center>	
							
					
		</div>
		
	<div class="btn-group btn-group-justified">
		
			<?php echo $this->Html->link(__('Nuevo Bautismo'), array('action' => 'add'), array('class' => 'btn btn-primary')); ?> 
			<?php echo $this->Html->link(__('Lista Bautismos'), array('action' => 'index'), array('class' => 'btn btn-danger')); ?>
			
			<?php echo $this->Html->link(__('Nuevo Miembro'), array('controller' => 'members', 'action' => 'add'), array('class' => 'btn btn-primary')); ?> 
		
	</div>
</div>