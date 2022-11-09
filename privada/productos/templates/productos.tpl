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
				<h1>PRODUCTOS</h1>
			</td>
			<td align="right" width="33%">
				<form name="formNuveo" method="post" action="producto_nuevo.php">
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
				<th>NRO</th><th>PRODUCTO</th><th>MARCA</th>
				<th><img src="../../imagenes/modificar.png"></th><th><img src="../../imagenes/borrar.png"></th>
			</tr>
			{assign var="b" value='1'}
			{foreach item=r from=$productos}
			<tr>
				<td align="center">{$b}</td>
				<td>{$r.nombre}</td>
				<td>{$r.marca}</td>
				<td align="center">
					<form name="formModif{$r.id_producto}" method="post" action="producto_modificar.php">
						<input type="hidden" name="id_producto" value="{$r.id_producto}">
						<input type="hidden" name="id_marca" value="{$r.id_marca}">
						<a href="javascript:document.formModif{$r.id_producto}.submit();" title="Modificar productos">
						Modificar>>	
						</a>
					</form>
				</td>
				<td align="center">
					<form name="formElimi{$r.id_producto}" method="post" action="producto_eliminar.php">
						<input type="hidden" name="id_producto" value="{$r.id_producto}">
						<a href="javascript:document.formElimi{$r.id_producto}.submit();" title="Eliminar Producto" onclick='javascript:return(confirm("Desea realmente Eliminar el producto:::{$r.id_producto}?"));'>
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
