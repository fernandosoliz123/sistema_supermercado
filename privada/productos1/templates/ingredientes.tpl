<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css" >
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
		<script type="text/javascript" src="../../ajax.js"></script>
		<script type="text/javascript">
			
			function buscar_productos(){
			
			var d1, d2, d3,d4, ajax, contenedor, url, param;
			contenedor = document.getElementById('productos1');
		
			d1 = document.formu.Nombre del proveedor.value;
			d2 = document.formu.descripcion.value;
			d3 = document.formu.modelo.value;
			d4 = document.formu.marca.value;

			ajax = nuevoAjax();
			url = "ajax_buscar_productos.php"
			param = "Nombre del proveedor="+d1+"&descripcion="+d2+"&modelo="+d3+"&marca="+d4;
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
				<form name="formNuveo" method="post" action="ingredientes_nuevo.php">
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
			<b>NOMBRE DEL PROVEEDOR</b><br>
			<select name="receta" onchange="buscar_productos()">
			<option value="">---seleccione---</option>
			{foreach item=r from=$productos1}
			<option value="{$r.receta}">{$r.receta}</option>
			{/foreach}
			</select>	
			</th>
			<th>
			<b>DESCRIPCION</b><br>
				<input type="text" name="productos" value="" size="10" onkeyup="buscar_productos()">
			</th>
			<th>
			<b>MODELO</b><br>
				<input type="float" name="cantidad_ing" value="" size="10" onkeyup="buscar_ingredientes()">
			</th>
			<th>
			<b>MARCA</b><br>
				<input type="text" name="unidad_ing" value="" size="10" onkeyup="buscar_ingredientes()">
			</th>
		</tr>
	</table>	
	</form>	
	</center>

	<!-- FIN BUSCADOR-->

	<center>
		<div id="ingredientes1">
		<table class="listado">
			<tr>
				<th>NRO</th><th>NOMBRE DEL PROVEEDOR</th><th>DESCRIPCION</th><th>MODELO</th><th>MARCA</th>
			</tr>
			{assign var="b" value='1'}
			{foreach item=r from=$productos1}
			<tr>
				<td align="center">{$b}</td>
				<td align="center">{$r.receta}</td>
				<td align="center">{$r.ingrediente}</td>
				<td align="center">{$r.cantidad}</td>
				<td align="center">{$r.unidad}</td>
				
				{assign var="b" value="`$b+1`"}
				{/foreach}
			</tr>
		</table>

	</div>
	</center>
</body>
</html>
