<!DOCTYPE html>
<html lang="esp">
<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css" >
	<meta charset="UTF-8">

	<script type="text/javascript">
	function validar() {
		nombre = document.formu.nombre.value;
		if (document.formu.nombre.value == "") {
			alert("Por favor seleccione el cliente");
			document.formu.nombre.focus();
			return;
		}
		ventanaCalendario = window.open("rpt_vehiculos1.php?nombre=" + nombre , "calendario", "width=600, height=550,left=100,top=100,scrollbars=yes,menubars=no,statusbar=NO,status=NO,resizable=YES,location=NO")
	}
	</script>
</head>
<body>
	<div class="formu_ingreso_datos">
		<h2> RPT DE VEHICULOS POR CLIENTES</h2>
		<form method="post" name="formu">
			<p>
				<b>*Seleccione el cliente</b>
				<select name="nombre">
				<option value="">--Seleccione--</option>
				<option value="T">Todos</option>
				{foreach item=r from=$clientes}
				<option value="{$r.nombre}">{$r.nombre}</option>
				{/foreach}			
			</select>
			</p>
			<p>
				<input type="hidden" name="accion" value="">
				<input type="button" value="Aceptar" onclick="validar();" class="boton">
			</p>	
		</form>
	</div>
</body>
</html>
