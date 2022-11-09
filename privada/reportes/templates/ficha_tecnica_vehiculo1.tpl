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
	 			<h1>FICHA TECNICA DE VEHICULOS</h1>
	 		</td> 
	 	</tr > 
	 	</table> 
	 	<br> 
	 	<center> 
	 		<table border="1" cellspacing="0"> 
	 		<tr>
	 			<td>
	 				<table>
	 				 {foreach item=r from=$vehiculos}	
	 		<tr>
			<th>
			<b>Nombre del cliente</b><br>
			<td><input type="text" name="nombre" value="{$r.nombre}" disabled=""></td>
			</th>
		</tr>
			<tr>
			<th>
			<b>nro_placas</b><br>
			<td><input type="text" name="nro_placa" value="{$r.nro_placa}" disabled=""></td>
			</th>
		</tr>
		<tr>
	 		<th>
			<b>Modelo</b><br>
			<td><input type="text" name="modelo" value="{$r.modelo}" disabled=""></td>
			</th>
		</tr>
		{/foreach}
		</table>
		<td>

			<tr>
			</tr>
			
		</table > 
		</center> 
	</body> 
</html>