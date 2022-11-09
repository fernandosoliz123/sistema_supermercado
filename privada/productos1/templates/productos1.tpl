<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css" >
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
		<script type="text/javascript" src="../../ajax.js"></script>
		<script type="text/javascript">
			
			function buscar(){
			
			var d1, d2, d3,d4, ajax, contenedor, url, param;
			contenedor = document.getElementById('productos1');
			
			d1 = document.formu.proveedor.value;
			d2 = document.formu.descripcion.value;
			d3 = document.formu.modelo.value;
			d4 = document.formu.marca.value;

			ajax = nuevoAjax();
			url = "ajax_buscar_productos.php"
			param = "proveedor="+d1+"&descripcion="+d2+"&modelo="+d3+"&marca="+d4;
			ajax.open("POST",url,true);
			ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			ajax.onreadystatechange = function(){
				if (ajax.readyState == 4){
					contenedor.innerHTML = ajax.responseText;
				}
			}
			ajax.send(param);
		}
		</script>
		
</head>
<body>
	<table width="100%" border="0">
		<tr>
			<td width="33%">
				<table border="0">
					<tr>
					</tr>
				</table>
			</td>
			<td align="center" width="33%">

				<h1>PRODUCTOS</h1>
			</td>
			<td align="right" width="33%">
				<form name="formNuveo" method="post" action="productos_nuevo.php">
					<a href="javascript:document.formNuveo.submit();">
						Nuevo>>>
					</a>
				</form>
			</td>
		</tr>
	</table>
		<!-- INICIO BUSCADOR-->
	<center>
	<form action="#" method="post" name="formu">
	<table border="1" class="listado">
		<tr>
			<th>
			<b>PROVEEDOR</b><br>
			<select name="proveedor" onchange="buscar()">
			<option value="">---seleccione---</option>
			{foreach item=r from=$productos}
			<option value="{$r.nombre}">{$r.nombre}</option>
			{/foreach}
			</select>	
			</th>
			<th>
			<b>DESCRIPCION</b><br>
				<input type="text" name="descripcion" value="" size="10" onkeyup="buscar()">
			</th>
			<th>
			<b>MODELO</b><br>
				<input type="float" name="modelo" value="" size="10" onkeyup="buscar()">
			</th>
			<th>
			<b>MARCA</b><br>
				<input type="text" name="marca" value="" size="10" onkeyup="buscar()">
			</th>
		</tr>
	</table>	
	</form>	
	</center>

	<!-- FIN BUSCADOR-->

	<center>
		<div id="productos1">
		<table class="listado">
			<tr>
				<th>NRO</th><th>PROVEEDOR</th><th>DESCRIPCION</th><th>MODELO</th><th>MARCA</th>
			</tr>
			{assign var="b" value='1'}
			{foreach item=r from=$productos}
			<tr>
				<td align="center">{$b}</td>
				<td align="center">{$r.nombre}</td>
				<td align="center">{$r.descripcion}</td>
				<td align="center">{$r.modelo}</td>
				<td align="center">{$r.marca}</td>
				
				{assign var="b" value="`$b+1`"}
				{/foreach}
			</tr>
		</table>

	</div>
	</center>
</body>
</html>
