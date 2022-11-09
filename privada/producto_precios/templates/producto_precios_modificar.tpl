<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../{$direc_css}"type="text/css">
	<script type="text/javascript" src="../js/expresiones_regulares.js"></script>
	<script type="text/javascript" src="js/validar_producto_precio.js"></script>
</head>
<body>
	<div class="formu_ingreso_datos">
		<form action="producto_precios_modificar1.php" method="post" name="formu">
			<h2>MODIFICAR PRODUCTO</h2>
			<b>Producto (*)</b>
			<select name="id_producto">
			{foreach item=r from=$productos}
			<option value="{$r.id_producto}">{$r.nombre}</option>
			{/foreach}
			<!--{foreach item=r from=$producto}
			<option value="{$r.id_producto}">{$r.ap} - {$r.am} - {$r.nombres}</option>
			{/foreach}-->
			</select>
			{foreach item=r from=$producto_precios}
				<p>
				<b>Precio:</b><input type="float" name="precio" size="15" value="{$r.precio}"> (*)
			</p>
			<p>
				<b>fecha asignada:</b><input type="date" name="fecha_asignada" size="15"  value="$r.fecha_asignada"> (*)
			</p>
			<p>
				<input type="hidden" name="accion" value="">
				<input type="hidden" name="id_precio" value="{$r.id_precio}">
				<input type="button" value="Aceptar" onclick="validar();" class="boton2">
				<input type="button" value="Cancelar" onclick="javascript:location.href='producto_precios.php';" class="boton2">
			</p>
			{/foreach}
			<p><b>(*)Campos Obligatorios</b></p>
		</form>
	</div>
</body>
</html>	