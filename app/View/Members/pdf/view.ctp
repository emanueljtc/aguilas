<style>
h3 {
	text-align: center;
	font-size: 30px;
	font-family:Lucida Sans Unicode;
	text-decoration: underline;
}
p {
	font-size: 20px;
	font-weight: bold;
	text-decoration: none;
	text-align : justify;

}
pastor{
	font-size: 20px;
	font-weight: bold;
	text-align: left;
}
copastor{
	font-size: 20px;
	font-weight: bold;
	text-align: right;
}
table, th, td {
    
    font-size: 18px;
}
th {
    padding: 5px;
    text-align: left;
    background-color: #940616;

}
td {
    padding: 5px;
    text-align: center;

    
}

table#forma {
    width: 100%;    
    
    
}
membrete{
	font-size: 25px;
	font-weight: bold;
	text-decoration: none;
}
.fecha{
	font-size: 20px;
	font-weight: bold;
	text-decoration: none;
	text-align: right;
}

</style>
<div class="imagen">
<img src="../aguilas/app/webroot/img/foto1.jpg"> <!-- INSERTANDO LOGO-->
</div>
<div class="fecha">
<?php echo "/" . date("d") . "/" . date("m") . "/" . date("Y"); ?>
</div >
<br>
	<membrete>
		Rep&uacute;blica Bolivarina de Venezuela<br>
		San Juan de los Morros Edo. Gu&aacute;rico<br>
		Casa Apost&oacute;lica Prof&eacute;tica y Generacional "Como &Aacute;guilas"
	</membrete>
	
	<br><br><br><br><br>
	<h3>Constancia de Membresia</h3>
	<br><br><br>
	<p> Por medio del presente documento se hace constar que el ciudadano(a) <?php echo $this->Html->link($member['Member']['name'], array('controller' => 'Members', 'action' => 'view', $member['Member']['id'])); ?> portardor de la cedula de identidad numero <?php echo $this->Html->link($member['Member']['dni'], array('controller' => 'Members', 'action' => 'view', $member['Member']['id'])); ?> es miembro activo de la Casa Apost&oacute;lica Prof&eacute;tica y Generacional "Como &Aacute;guilas" lo cual lo hace acreedor de la presente constancia, para as&iacute; certificar su membresia en la congregaci&oacute;n antes mencionada.  </p>
	<!-- <p> Datos del Miembro: </p>
	<br><br>
		
		<br>
		<table id="forma" border="1">
			<tr >

				
				<th>Nombre</th>
				
				<th>Cedula</th>
				<th>Edad</th>
				<th>Sexo</th>
				

				
				


				
			</tr>
			<tr>
					<td> <?php echo $this->Html->link($member['Member']['name'], array('controller' => 'Members', 'action' => 'view', $member['Member']['id'])); ?>
				     </td>

				     
				     </td>
				     <td> <?php echo $this->Html->link($member['Member']['dni'], array('controller' => 'Members', 'action' => 'view', $member['Member']['id'])); ?>
				     </td>
				     <td> <?php echo $this->Html->link($member['Member']['age'], array('controller' => 'Members', 'action' => 'view', $member['Member']['id'])); ?>
				     </td>
				     <td> <?php echo $this->Html->link($member['Member']['sex'], array('controller' => 'Members', 'action' => 'view', $member['Member']['id'])); ?>
				     </td>
				    
				     

			</tr>
			
		</table> -->
<br><br><br><br><br>

<table border="0" cellspacing="29" style="width:100%" align="center" >
		<tr> 
				<td>
				<pastor>	
				       _______________ <br><br>
					   Miguel Cabrera <br>
					    C.I 4.397.196<br>
					       Pastor
				</pastor>
				</td>
				<td>
					
				</td>
				<td>
				<copastor>	
					  _______________ <br><br>
					    Joaquin Torres <br>
						C.I 5.161.055<br>
					      Co-Pastor
				</copastor>
				</td>
		</tr>
</table>

