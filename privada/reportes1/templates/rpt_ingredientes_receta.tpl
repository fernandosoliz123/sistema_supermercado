<!DOCTYPE html>
<html lang="esp">
<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css" >
	<meta charset="UTF-8">

	<script type="text/javascript">
	function validar() {
		receta = document.formu.receta.value;
		if (document.formu.receta.value == "") {
			alert("Por favor seleccione la receta");
			document.formu.receta.focus();
			return;
		}
		ventanaCalendario = window.open("rpt_ingredientes_receta1.php?receta=" + receta , "calendario", "width=600, height=550,left=100,top=100,scrollbars=yes,menubars=no,statusbar=NO,status=NO,resizable=YES,location=NO")
	}
	</script>
</head>
<body>
	<div class="formu_ingreso_datos">
		<h2> RPT DE INGREDIENTES POR RECETA</h2>
		<form method="post" name="formu">
			<p>
				<b>*Seleccione la receta</b>
				<select name="receta">
				<option value="">--Seleccione--</option>
				<option value="T">Todos</option>
				{foreach item=r from=$recetas}
				<option value="{$r.receta}">{$r.receta}</option>
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
