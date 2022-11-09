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
				<h1>DETALLE_COMPRAS</h1>
			</td>
			<td align="right" width="33%">
				<form name="formNuveo" method="post" action="detalle_compra_nuevo.php">
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
				<th>NRO</th><th>CANTIDAD</th><th>PRECIO</th> 
				<th><img src="../../imagenes/modificar.png"></th><th><img src="../../imagenes/borrar.png"></th>
			</tr>
			{assign var="b" value='1'}
			{foreach item=r from=$detalle_compras}
			<tr>
				<td align="center">{$b}</td>
				<td>{$r.cantidad}</td>
				<td>{$r.fecha}</td>
			 
				<td align="center">
					<form name="formModif{$r.id_detalle_compra}" method="post" action="detalle_compra_modificar.php">
						<input type="hidden" name="id_detalle_compra" value="{$r.id_detalle_compra}">
						<input type="hidden" name="id_compra" value="{$r.id_compra}">
						<a href="javascript:document.formModif{$r.id_detalle_compra}.submit();" title="Modificar detalle_compra">
						Modificar>>	
						</a>
					</form>
				</td>
				<td align="center">
					<form name="formElimi{$r.id_detalle_compra}" method="post" action="detalle_compra_eliminar.php">
						<input type="hidden" name="id_detalle_compra" value="{$r.id_detalle_compra}">
						<a href="javascript:document.formElimi{$r.id_detalle_compra}.submit();" title="Eliminar detalle_compra" onclick='javascript:return(confirm("Desea realmente Eliminar los detalle_compra:::{$r.id_detalle_compra}?"));'>
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
