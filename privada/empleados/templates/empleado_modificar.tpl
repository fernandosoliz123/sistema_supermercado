<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css">
	<script type="text/javascript" src="../js/expresiones_regulares.js"></script>
	<script type="text/javascript" src="js/validar_empleado.js"></script>
</head>
<body>
	<div class="formu_ingreso_datos">
		<form action="empleado_modificar1.php" method="post" name="formu">
		<h2>MODIFICAR EMPLEADO</h2>
		<b>cargo (*)</b>
			<select name="id_empleado">
		<!--modificacion de tipos_libros-->
		{foreach item=r from=$empleados}
		<option value={$r.id_empleado}>{$r.empleado}</option>
		{/foreach}

		{foreach item=r from=$empleado}
		<option value={$r.id_empleado}>{$r.empleado}</option>
		{/foreach}
	</select>
		<!--modificacion de libros-->
	{foreach item=r from=$empleado}
	<p>
		<input type="date" name="Fecha_inicio" size="35" placeholder="Fecha inicio" value="{$r.Fecha_inicio}">(*)
	</p>
	<p>
		<input type="date" name="Fecha_fin" size="25" placeholder="Fecha fin" value="{$r.Fecha_fin}">(*)
	</p>
	<p>
		<input type="text" name="Nombre" size="11" placeholder="Nombre" value="{$r.Nombre}">(*)
	</p>
	<p>
		<input type="text" name="Apellido_Paterno" size="11" placeholder="Apellido Paterno" value="{$r.Apellido_Paterno}">(*)
	</p>
	<p>
		<input type="text" name="Apellido_Materno" size="10" placeholder="Apellido_Materno" value="{$r.Apellido_Materno}">(*)
	</p>
	<p>
		<input type="hidden" name="accion" value="">
		<input type="hidden" name="id_empleado" value="{$r.id_empleado}">
		<input type="button" name="Aceptar" onclick="validar();"class="boton2">
		<input type="button" name="Cancelar" onclick="javascript:location.href='empleados.php';"class="boton2">


	</p>
	{/foreach}
	<p><b>(*) Campos Obligatorios</b></p>
</form>
</div>
</body>
</html>