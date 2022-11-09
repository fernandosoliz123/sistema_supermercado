<!DOCTYPE html> 
<html> 
	<head> 
	<script type="text/javascript">
		var ventanaCalendario=false
			function imprimir(){
				if (confirm('Desea Imprimir ?')){
					window.print();
				}
			}
	</script> 
	</head> 
	<body style='cursor:pointer;cursor:hand' onclick="imprimir();">
	 <table width="100%" border="0"> 
	 	<tr> 
	 		<td><img src="../../img/logo.jfif" width="70%" alt=""></td>
	 		<td align="center" width="80%">
	 			<h1>FICHA TECNICA DE PERSONA</h1>
	 		</td> 
	 	</tr > 
	 	</table> 
	 	<br> 
	 	<center> 
	 		<table border="1" cellspacing="0"> 
	 		<tr>
	 			<td>
	 				<table>
	 				 {foreach item=r from=$persona}	
	 		<tr>
			<th>
			<b>CI</b><br>
			<td><input type="text" name="ci" value="{$r.ci}" disabled=""></td>
			</th>
		</tr>
			<tr>
			<th>
			<b>Nombres</b><br>
			<td><input type="text" name="nombres" value="{$r.nombres}" disabled=""></td>
			</th>
		</tr>
		<tr>
	 		<th>
			<b>Apellido Paterno</b><br>
			<td><input type="text" name="paterno" value="{$r.ap}" disabled=""></td>
			</th>
		</tr>
		<tr>
			<th>
			<b>Apellido Materno</b><br>
			<td><input type="text" name="materno" value="{$r.am}" disabled=""></td>
			</th>
			</tr>
			<tr>
			<th>
			<b>Direccion</b><br>
			<td><input type="text" name="direccion" value="{$r.direccion}" disabled=""></td>
			</th>
			</tr>
			<tr>
			<th>
			<b>Telefono</b><br>
			<td><input type="text" name="telef" value="{$r.telef}" disabled=""></td>
			</th>
			</tr>
			<tr>
				<th>
			<b>Genero</b><br>
			</th>
				<td>
					{if $r.genero == 'M'}<input type="text" name="genero" value="MASCULINO" disabled="">{/if}
					{if $r.genero == 'F'}<input type="text" name="genero" value="FEMENINO" disabled="">{/if}
				</td>
			</tr>
			{/foreach}
	 		</table>
	 		</td>
	 	</tr>
		</table > 
		</center> 
	</body> 
</html>