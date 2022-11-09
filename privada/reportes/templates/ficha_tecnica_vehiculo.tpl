<!DOCTYPE html>
<html lang="esp">
<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css">
	<meta charset="utf-8">
	<script type="text/javascript" src="../../ajax.js"></script>
	<script type="text/javascript">
		function buscar(){
			var d1, d2,d3, contenedor, ajax, url, param;
			contenedor = document.getElementById('vehiculos1')
			d1= document.formu.nombre.value;
			d2= document.formu.nro_placa.value;
			d3= document.formu.modelo.value;
			ajax = nuevoAjax();
			url = "ajax_buscar_vehiculo.php"
			param = "nombre="+d1+"&nro_placa="+d2+"&modelo="+d3;
//alert(param);
ajax.open("POST", url, true);
ajax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
ajax.onreadystatechange = function() {
	if (ajax.readyState == 4) {
		contenedor.innerHTML = ajax.responseText;
	}
}
ajax.send(param);
}
function mostrar(id_vehiculo) {
	var d1, ventanaCalendario;
	d1 = id_vehiculo;
	//alert(id_persona);
	ventanaCalendario = window.open("ficha_tecnica_vehiculo1.php?id_vehiculo="+d1, "calendario", "width=600,height=500,left=100,top=100,scrollbars=yes,menubars=no,statusbar=NO,status=N0,resizable=YES,location=NO")
}
	</script>
	
</head>
<body>
	<!-----INICIO BUSCADOR----->
	<div class="titulo_listado">
		<h1>
			FICHA TECNICA VEHICULO
		</h1>
	<center>
		<form action="#" method="post" name="formu">
			<table border="1" class="listado">
				<tr>
					<th>
			<b>CLIENTES</b><br>
			<select name="nombre" onchange="buscar()">
			<option value="">---seleccione---</option>
			{foreach item=r from=$clientes}
			<option value="{$r.nombre}">{$r.nombre}</option>
			{/foreach}
			</select>	
			</th>
					<th>
						<b>Placa</b><br />
						<input type="text" name="nro_placa" value="" size="10" onkeyup="buscar()">
					</th>
					<th>
						<b>Modelo</b><br />
						<input type="text" name="modelo" value="" size="10" onkeyup="buscar()">
					</th>
				</tr>
			</table>
		</form>
	</center>
<!-------FIN BUSCADOR------>
<center>
	<div id="vehiculos1">
	</div>
</center>
</body>
</html>