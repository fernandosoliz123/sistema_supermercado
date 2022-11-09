<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../{$direc_css}"type="text/css">
	<script type="text/javascript" src="../js/expresiones_regulares.js"></script>
	<script type="text/javascript" src="js/validar_producto.js"></script>
</head>
<body>
	<div class="formu_ingreso_datos">
		<form action="producto_modificar1.php" method="post" name="formu">
			<h2>MODIFICAR PRODUCTO</h2>
			<b>marca (*)</b>
			<select name="id_marca">
			{foreach item=r from=$marca}
			<option value="{$r.id_marca}">{$r.marca}</option>	
			{/foreach}
			{foreach item=r from=$marcas}
			<option value="{$r.id_marca}">{$r.marca}</option>
			{/foreach}
			</select>
			{foreach item=r from=$producto}
			<p>
			<input type="text" name="nombre" size="15" placeholder="Nombre"  value="{$r.nombre}">(*)
			</p>
			<p>
				<input type="hidden" name="accion" value="">
				<input type="hidden" name="id_producto" value="{$r.id_producto}">
				<input type="button" value="Aceptar" onclick="validar();" class="boton2">
				<input type="button" value="Cancelar" onclick="javascript:location.href='productos.php';" class="boton2">
			</p>
			{/foreach}
			<p><b>(*)Campos Obligatorios</b></p>
		</form>
	</div>
</body>
</html>	