<!DOCTYPE html>

<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css" >
	<script type="text/javascript">
		var ventanaCalendario=false
		{
			ventanaCalendario =window.open("personas_usuarios1.php" , "calendario","width=600, height-550,left-100,top-100,scrollbars=yes,menubars=no,statusbar=NO,status=NO,resizable=YES,location=NO")
		}
	</script>
	
</head>
<body>
	<table width="100%" border="0">
		<tr>
			<td align="center"><h1>VENTAS_USUARIOS</h1></td>
		</tr>
	</table>
	<br>
	<center>
		<table class="listado">
			<tr>
				<th>NRO</th><th>VENTAS</th><th>NOMBRE DE USUARIO</th>
			</tr>
				{assign var="b" value="1"}
	            {foreach item=r from=$ventas_clientes}
	            <tr>
	            	<td align="center">{$b}</td>
				    <td>{$r.Monto_final}{$r.Fecha}{$r.descuento}</td>
				    <td>{$r.usuario1}</td>
				   {assign var="b" value="`$b+1`"}
				    
	            </tr>
	            {/foreach}
		</table>
		<br><br>
		<h2>
			<input type="radio" name="seleccionar" onclick="javascript:imprimir()">Imprimir
		</h2>
	</center>
</body>
</html>