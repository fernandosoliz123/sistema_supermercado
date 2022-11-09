<!DOCTYPE html>
<html lang="esp">
<head>
	<link rel="stylesheet" type="text/css" href="../{$direc_css}" type="text/css">
	<meta charset="utf-8">
	{literal}
	<script type="text/javascript">
		function validar(){
			marca=document.formu.marca.value;
			if (document.formu.marca.value=="") {
				alert("por favor seleccione una marca");
				document.formu.marca.focus();
				return;
			}
			ventanaCalendario = window.open ("rpt_productos_marcas1.php?marca="+ marca , "calendario" , "width=600 , height=550 ,left=100,top=100 ,scrollbars=yes ,menubars=no ,statusbar=NO , status=NO, resizable=YES ,location=NO" ) 
			}
	</script>
	{/literal}
</head>
<body >
<div class="formu_ingreso_datos"> 
	<h2>PRODUCTOS POR MARCAS</h2>
	<form method="post" name="formu" >
		<p>
			<b>*seleccione la marca</b>
			<select name="marca">
				<option value="">--Seleccione--</option>
				<option value="T">Todos</option>
				{foreach item=r from=$marcas}
				<option value="{$r.marca}">{$r.marca}</option>
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