<div id="general">
    <center>
		<br>
			<h3>Editar Miembro</h3>
		<br>
	</center>
	<div class="form-horizontal">
			
			<?php echo $this->Form->create('Member', array('type'=>'file', )); ?>
			<div class="form-group">
			        <?php 
					echo $this->Form->input('id', array('class'=>'form-control'));
					?>
			        <label class="control-label col-xs-3" >Cedula:</label>
			        <div class="col-xs-7">
			        
						<?php echo $this->Form->input('dni', array(
							'label'=>'','placeholder' => 'Cedula','class'=>'form-control'
						)); ?>
					</div>
					<label class="control-label col-xs-3" >Nombre:</label>
					<div class="col-xs-7">
						<?php echo $this->Form->input('name', array(
						'label'=>'','placeholder' => 'Nombre Completo','class'=>'form-control'
							)); ?>
					</div>
						<label class="control-label col-xs-3" >Sexo:</label>
					<div class="col-xs-7">
						<?php 
							echo $this->Form->input('sex',
							 array('class'=>'form-control','label'=>'','type'=>'select','options'=>array(''=>'Sexo','F'=>'Femenino','M'=>'Masculino')));
						?>
					</div>
					<label class="control-label col-xs-3" >Edad:</label>
					<div class="col-xs-7">
						<?php echo $this->Form->input('age', array(
						'label'=>'','placeholder' => 'Edad','type'=>'text','class'=>'form-control'
							)); ?>
					</div>
					<label class="control-label col-xs-3" >Email:</label>
					<div class="col-xs-7">
							<?php echo $this->Form->input('email', array(
							'label'=>'','placeholder' => 'Email','type'=>'email','class'=>'form-control'
								)); ?>
					</div>
					<label class="control-label col-xs-3" >Telefono:</label>
					<div class="col-xs-7">
							<?php echo $this->Form->input('phone', array(
							'label'=>'','placeholder' => 'Telefono','type'=>'text','class'=>'form-control'
								)); ?>
					</div>
					<label class="control-label col-xs-3" >Ciudad:</label>
					<div class="col-xs-7">
							<?php echo $this->Form->input('city', array(
							'label'=>'','placeholder' => 'Ciudad','type'=>'text','class'=>'form-control'
								)); ?>
					</div>
					<label class="control-label col-xs-3" >¿Bautizado?:</label>
					<div class="col-xs-7">
							<?php echo $this->Form->input('baptism',
										    array('class'=>'form-control','type'=>'select','options'=>array(''=>'¿Bautizado?','NO'=>'NO','SI'=>'SI'),'label'=>''));
								 ?>
					</div>
					<label class="control-label col-xs-3" >Foto:</label>
					<div class="col-xs-7">
							<?php 
								echo $this->Form->input('foto',array('type'=>'file','label'=>'','class'=>'form-control'));
										echo $this->Form->input('foto_dir',array('type'=>'hidden'));
							?>
					</div>
				
					<label class="control-label col-xs-3">F. Nacimiento:</label>
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
								echo $this->Form->input('born_date', array(
									    'label' => ' ',
									    'dateFormat' => 'DMY',
									    'minYear' => date('Y') - 95,//aqui se configura la edad limite de miembro
									    'maxYear' => date('Y') - 0,
									    'monthNames' => $meses
									));
							?>
		        </div>
					
					<label class="control-label col-xs-3" >Direccion:</label>
					<div class="col-xs-7">
							<?php 
								 echo $this->Form->input('address', array(
									'label'=>'','placeholder' => 'Direccion','class'=>'form-control'
								)); 
							?>
							<br>
					</div>

									
			</div>
				<center>
					<input type="submit" value="Actualizar" class="btn btn-info">
					<input type="reset" value="Limpiar" class="btn btn-danger">
				</center>	
		</div>
			<br>
			<div class="btn-group btn-group-justified">
				
				

					<?php echo $this->Html->link(__('Nuevo Miembro'), array('controller' => 'members', 'action' => 'add'), array('class' => 'btn btn-primary')); ?> 
					<?php echo $this->Html->link(__('Lista Miembros'), array('action' => 'index'), array('class' => 'btn btn-danger')); ?>
					<?php echo $this->Html->link(__('Lista Bautismos'), array('controller' => 'baptisms', 'action' => 'index'), array('class' => 'btn btn-primary')); ?> </li>
					
				
		</div>
	</div>
</div>