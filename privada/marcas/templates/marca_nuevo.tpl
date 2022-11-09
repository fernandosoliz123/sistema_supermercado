<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../{$direc_css}"type="text/css">
	<script type="text/javascript" src="../js/expresiones_regulares.js"></script>
	<script type="text/javascript" src="js/validar_marca.js"></script>
</head>
<body>
	<div class="formu_ingreso_datos">
		<form action="marca_nuevo1.php" method="post" name="formu">
			<h2>REGISTRAR MARCAS</h2>
			<b>Persona (*)</b>
			<select name="id_proveedor">
			<option value="">--- seleccione ---</option>
			{foreach item=r from=$proveedores}
			<option value="{$r.id_proveedor}">{$r.nombre_proveedor}-{$r.direccion}-{$r.telefono}</option>
			{/foreach}
			</select>
			<p>
			<input type="text" name="marca" size="15" placeholder="Marca" >(*)
			</p>
			
			<p>
				<input type="hidden" name="accion" value="">
				<input type="button" value="Aceptar" onclick="validar();" class="boton2">
				<input type="button" value="Cancelar" onclick="javascript:location.href='marcas.php';" class="boton2">
			</p>
			<p><b>(*)Campos Obligatorios</b></p>
		</form>
	</div>
</body>
</html>