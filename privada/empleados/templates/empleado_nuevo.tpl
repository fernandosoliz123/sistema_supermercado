<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../{$direc_css}"type="text/css">
	<script type="text/javascript" src="../js/expresiones_regulares.js"></script>
	<script type="text/javascript" src="js/validar_empleado.js"></script>
</head>
<body>
	<div class="formu_ingreso_datos">
		<form action="empleado_nuevo1.php" method="post" name="formu">
			<h2>REGISTRAR EMPLEADO</h2>
			<input type="text" name="Fecha_inicio" size="15" placeholder="Fecha_inicio" >(*)
			<p>
			<input type="text" name="Fecha_fin" size="15" placeholder="Fecha_fin" onkeyup="this.value=this.value.toUpperCase()">(*)
			</p>
			<p>
			<input type="text" name="Apellido_Paterno" size="15" placeholder="Apellido Paterno" onkeyup="this.value=this.value.toUpperCase()">(*)
			</p>
			<p>
			<input type="text" name="Apellido_Materno" size="15" placeholder="Apellido Materno" onkeyup="this.value=this.value.toUpperCase()">(*)
			</p>
			<p>
			<input type="text" name="Direccion" size="15" placeholder="Direccion" onkeyup="this.value=this.value.toUpperCase()">
			</p>
			<p>
			<input type="text" name="telefono" size="15" placeholder="Telefono">
			</p>
			<p>
			(*)<b>Genero</b><input type="radio" name="genero" value="F">Femenino<input type="radio" name="genero" value="M">Masculino
			</p>
			<p>
				<input type="hidden" name="accion" value="">
				<input type="button" value="Aceptar" onclick="validar();" class="boton2">
				<input type="button" value="Cancelar" onclick="javascript:location.href='empleados.php';" class="boton2">
			</p>
			<p><b>(*)Campos Obligatorios</b></p>
		</form>
	</div>
</body>
</html>