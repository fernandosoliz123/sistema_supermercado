<!DOCTYPE html>

<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css" >
	<script type="text/javascript">
		var ventanaCalendario=false
		function imprimir(){
			ventanaCalendario =window.open("cargo_empleados1.php" , "calendario","width=600, height-550,left-100,top-100,scrollbars=yes,menubars=no,statusbar=NO,status=NO,resizable=YES,location=NO")
		}
	</script>
	
</head>
<body>
	<table width="100%" border="0">
		<tr>
			<td align="center"><h1>CARGO_EMPLEADOS</h1></td>
		</tr>
	</table>
	<br>
	<center> <table class="listado">
			<tr>
				<th>NRO</th><th>EMPLEADO</th><th>CARGO</th>
			</tr>
				{assign var="b" value="1"}
	            {foreach item=r from=$cargo_empleados}<tr>
	            	<td align="center">{$b}</td>
				    <td>{$r.Nombre} {$r.Apellido_Paterno} {$r.Apellido_Materno}</td>
				    <td>{$r.cargo}</td>
				   {assign var="b" value="`$b+1`"}</tr>
	            {/foreach}
		</table>
		<br><br>
		<h2>
			<input type="radio" name="seleccionar" onclick="javascript:imprimir()">Imprimir</td>
		</h2>
	</center>
</body>
</html>