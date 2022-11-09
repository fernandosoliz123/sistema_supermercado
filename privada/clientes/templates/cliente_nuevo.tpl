<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../{$direc_css}"type="text/css">
	<script type="text/javascript" src="../js/expresiones_regulares.js"></script>
	<script type="text/javascript" src="js/validar_cliente.js"></script>
</head>
<body>
	<div class="formu_ingreso_datos">
		<form action="cliente_nuevo1.php" method="post" name="formu">
			<h2>REGISTRAR CLIENTE</h2>
			
			<p>
			<input type="text" name="Nombre" size="15" placeholder="Nombre" onkeyup="this.value=this.value.toUpperCase()">(*)
			</p>
			<p>
			<input type="text" name="apellido_paterno" size="15" placeholder="apellido_Paterno" onkeyup="this.value=this.value.toUpperCase()">(*)
			</p>
			<p>
			<input type="text" name="apellido_materno" size="15" placeholder="apellido_materno" onkeyup="this.value=this.value.toUpperCase()">(*)
			</p>
			<input type="text" name="ci" size="15" placeholder="ci" >(*)
			<p>
			<input type="text" name="direccion" size="15" placeholder="Direccion" onkeyup="this.value=this.value.toUpperCase()">
			</p>
			<p>
			(*)<b>Genero</b><input type="radio" name="genero" value="F">Femenino<input type="radio" name="genero" value="M">Masculino
			</p>
			<p>
				<input type="hidden" name="accion" value="">
				<input type="button" value="Aceptar" onclick="validar();" class="boton2">
				<input type="button" value="Cancelar" onclick="javascript:location.href='clientes.php';" class="boton2">
			</p>
			<p><b>(*)Campos Obligatorios</b></p>
		</form>
	</div>
</body>
</html>