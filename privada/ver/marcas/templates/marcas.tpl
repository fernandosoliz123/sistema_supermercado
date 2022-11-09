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
				<h1>MARCAS</h1>
			</td>
			<td align="right" width="33%">
				<form name="formNuveo" method="post" action="marca_nuevo.php">
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
				<th>NRO</th><th>NOMBRE_PRODUCTO</th><th>NOMBRE</th>
				<th><img src="../../imagenes/modificar.png"></th><th><img src="../../imagenes/borrar.png"></th>
			</tr>
			{assign var="b" value='1'}
			{foreach item=r from=$marcas}
			<tr>
				<td align="center">{$b}</td>
				<td>{$r.nombre}</td>
				<td>{$r.nombre}</td>
			 
				<td align="center">
					<form name="formModif{$r.id_marca}" method="post" action="marca_modificar.php">
						<input type="hidden" name="id_marca" value="{$r.id_marca}">
						<input type="hidden" name="id_proveedor" value="{$r.id_proveedor}">
						<a href="javascript:document.formModif{$r.id_marca}.submit();" title="Modificar marcas">
						Modificar>>	
						</a>
					</form>
				</td>
				<td align="center">
					<form name="formElimi{$r.id_marca}" method="post" action="marca_eliminar.php">
						<input type="hidden" name="id_marca" value="{$r.id_marca}">
						<a href="javascript:document.formElimi{$r.id_marca}.submit();" title="Eliminar Marca" onclick='javascript:return(confirm("Desea realmente Eliminar la Marca:::{$r.id_marca}?"));'>
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
