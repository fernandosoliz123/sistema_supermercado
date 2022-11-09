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
				<h1>PRODUCTO_PRECIOS</h1>
			</td>
			<td align="right" width="33%">
				<form name="formNuveo" method="post" action="producto_precios_nuevo.php">
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
				<th>NRO</th><th>PRODUCTO</th><th>PRECIO</th> 
				<th><img src="../../imagenes/modificar.png"></th><th><img src="../../imagenes/borrar.png"></th>
			</tr>
			{assign var="b" value='1'}
			{foreach item=r from=$producto_precios}
			<tr>
				<td align="center">{$b}</td>
				<td>{$r.nombre}</td>
				<td>{$r.precio}</td>
				
			 
				<td align="center">
					<form name="formModif{$r.id_precio}" method="post" action="producto_precios_modificar.php">
						<input type="hidden" name="id_precio" value="{$r.id_precio}">
						<input type="hidden" name="id_producto" value="{$r.id_producto}">
						<a href="javascript:document.formModif{$r.id_precio}.submit();" title="Modificar producto_precios">
						Modificar>>	
						</a>
					</form>
				</td>
				<td align="center">
					<form name="formElimi{$r.id_precio}" method="post" action="producto_precios_eliminar.php">
						<input type="hidden" name="id_precio" value="{$r.id_precio}">
						<a href="javascript:document.formElimi{$r.id_precio}.submit();" title="Eliminar producto_precios" onclick='javascript:return(confirm("Desea realmente Eliminar los producto_precio:::{$r.id_precio}?"));'>
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
