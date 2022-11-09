<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css" >
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">

</head>
<body>
	<table width="100%" border="0">
		<tr>
			<td width="33%">
				<table border="0">
					<tr>
					</tr>
				</table>
			</td>
			<td align="center" width="33%">
				<h1>VENTAS</h1>
			</td>
			<td align="right" width="33%">
				<form name="formNuveo" method="post" action="venta_nuevo.php">
					<a href="javascript:document.formNuveo.submit();">
						Nuevo>>>
					</a>
				</form>
			</td>
		</tr>
	</table>

	<center>
		<table class="listado">
			<tr>
				<th>NRO</th><th>MONTO</th><th>CLIENTES</th>
				<th><img src="../../imagenes/modificar.png"></th><th><img src="../../imagenes/borrar.png"></th>
			</tr>
			{assign var="b" value='1'}
			{foreach item=r from=$ventas}
			<tr>
				<td align="center">{$b}</td>
				<td>{$r.Monto_final}</td>
				<td>{$r.Fecha}{$r.descuento}</td>
				<td align="center">
					<form name="formModif{$r.id_venta}" method="post" action="producto_modificar.php">
						<input type="hidden" name="id_venta" value="{$r.id_venta}">
						<input type="hidden" name="id_cliente" value="{$r.id_cliente}">
						<a href="javascript:document.formModif{$r.id_venta}.submit();" title="Modificar ventas">
						Modificar>>	
						</a>
					</form>
				</td>
				<td align="center">
					<form name="formElimi{$r.id_venta}" method="post" action="venta_eliminar.php">
						<input type="hidden" name="id_venta" value="{$r.id_venta}">
						<a href="javascript:document.formElimi{$r.id_venta}.submit();" title="Eliminar Venta" onclick='javascript:return(confirm("Desea realmente Eliminar la Venta:::{$r.id_venta}?"));'>
							Eliminar>>
						</a>
					</form>
				</td>
				{assign var="b" value="`$b+1`"}
				{/foreach}
			</tr>
		</table>

	</center>
</body>
</html>
