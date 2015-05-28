<div id="general"> 
	<center>
		<br>
			<h3>Editar Visitante</h3>
		<br>
	</center>
	<div class="form-horizontal">
		<?php echo $this->Form->create('Visitor', array('type'=>'file', )); ?>
			<div class="form-group">
			<fieldset>
				<?php echo $this->Form->input('id'); ?>
				<label class="control-label col-xs-3" >Nombre Completo:</label>
			        <div class="col-xs-7">
			        
						<?php echo $this->Form->input('name', array('label'=>'','class'=>'form-control'
						)); ?>
					</div>
				<label class="control-label col-xs-3" >Direcci&oacute;n:</label>
			        <div class="col-xs-7">
			        
						<?php echo $this->Form->input('address', array('label'=>'','class'=>'form-control'
						)); ?>
					</div>
				<label class="control-label col-xs-3" >Correo:</label>
			        <div class="col-xs-7">
			        
						<?php echo $this->Form->input('email', array('label'=>'','class'=>'form-control'
						)); ?>
					</div>
				<label class="control-label col-xs-3" >Telefono:</label>
			        <div class="col-xs-7">
			        
						<?php echo $this->Form->input('phone', array('label'=>'','class'=>'form-control'
						)); ?>
					</div>
				<label class="control-label col-xs-3" >Profesi&oacute;n:</label>
			        <div class="col-xs-7">
			        
						<?php echo $this->Form->input('profession', array('label'=>'','class'=>'form-control'
						)); ?>
					</div>
				<label class="control-label col-xs-3" >Estado Civil:</label>
			        <div class="col-xs-7">
			        
						<?php echo $this->Form->input('marital_status', array('label'=>'','class'=>'form-control'
						)); ?>
					</div>
				<label class="control-label col-xs-3" >Iglesia</label>
			        <div class="col-xs-7">
			        
						<?php echo $this->Form->input('church', array('label'=>'','class'=>'form-control'
						)); ?>
					</div>
				<label class="control-label col-xs-3" >Razon</label>
			        <div class="col-xs-7">
			        
						<?php echo $this->Form->input('reason', array('label'=>'','class'=>'form-control'
						)); ?>
					</div>
					</fieldset>
					<br>
					<center>
					<input type="submit" value="Actualizar" class="btn btn-info">
					<input type="reset" value="Limpiar" class="btn btn-danger">
			</div>
	
	</div>
	<br>
	<div class="btn-group btn-group-justified">
		
		

			<?php echo $this->Html->link(__('Nuevo Miembro'), array('controller' => 'members', 'action' => 'add'), array('class' => 'btn btn-info')); ?> 
			<?php echo $this->Html->link(__('Lista Visitas'), array('action' => 'index'), array('class' => 'btn btn-danger')); ?>
			<?php echo $this->Html->link(__('Nuevo Visitante'), array('action' => 'add'), array('class' => 'btn btn-primary')); ?> 
		
	</div>
</div>