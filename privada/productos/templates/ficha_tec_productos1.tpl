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
	 		</td>
	 		<td align="center" width="80%">
	 			<h1>FICHA TECNICA DE PRODUCTOS</h1>
	 		</td> 
	 	</tr > 
	 	</table> 
	 	<br> 
	 	<center> 
	 		<table border="1" cellspacing="0"> 
	 		<tr>
	 			<td>
	 				<table>
	 				 {foreach item=r from=$producto}	
	 		<tr>
			<th>
			<b>Nombre del Producto:</b><br>
			<td><input type="text" name="nombre_producto" value="{$r.nombre}" disabled=""></td>
			</th>
		</tr>
			<tr>
			<th>
			<b>Marca:</b><br>
			<td>{$r.marca}</td>
			</th>
		</tr>
			<tr>
			<th>
			<b>Proveedor:</b><br>
			<td>{$r.nombre_proveedor}</td>
			</th>
			</tr>
			
			{/foreach}
	 		</table>
	 		</td>
	 	</tr>
		</table > 
		</center> 
	</body> 
</html>