<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../{$direc_css}">
	<meta charset="utf-8">
	<script type="text/javascript" src="../../ajax.js"></script>
	<script type="text/javascript">
		function buscar(){
			
			var d1, d2, d3, ajax, contenedor, url, param;
			contenedor = document.getElementById('vehiculo1');
			
			d1 = document.formu.cliente.value;
			d2 = document.formu.nro_placa.value;
			d3 = document.formu.modelo.value;
	

			ajax = nuevoAjax();
			url = "ajax_buscar_vehiculos.php"
			param = "cliente="+d1+"&nro_placa="+d2+"&modelo="+d3;
			ajax.open("POST",url,true);
			ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			ajax.onreadystatechange = function(){
				if (ajax.readyState == 4){
					contenedor.innerHTML = ajax.responseText;
				}
			}
			ajax.send(param);
		}

		function mostrar(id_vehiculo){
			var d1, ventanaCalendario;
			d1 = id_vehiculo;
			//alert(id_vehiculo);
			ventanaCalendario = window.open ("ficha_tecnica_vehiculo1.php?id_vehiculo="+d1 , "calendario" , "width=600 , height=550 ,left=100,top=100 ,scrollbars=yes ,menubars=no ,statusbar=NO , status=NO, resizable=YES ,location=NO" )

		}
	</script>
</head>
<body>
	<!----------BUSCADOR------------->
	<div class="titulo_listado">
		<h1>
			FICHA TECNICA VEHICULOS
		</h1>
	</div>
	<center>
	<form action="#" method="post" name="formu">
		<table border="1">
			<tr>
			<th>
			<b>CLIENTES</b><br>
			<select name="cliente" onchange="buscar_clientes()">
			<option value="">---seleccione---</option>
			{foreach item=r from=$vehiculos}
			<option value="{$r.vehiculo}">{$r.vehiculo}</option>
			{/foreach}
			</select>	
			</th>
			<th>
			<b>Numero placas</b><br>
				<input type="text" name="nro_placas" value="" size="10" onkeyup="buscar()">
			</th>
			<th>
			<b>Modelo</b><br>
				<input type="text" name="modelo" value="" size="10" onkeyup="buscar()">
			</th>
	</tr>
</table>
</form>
</center>
	<center>
		<div id="vehiculos1"></div>
	</center>
</body>
</html>
