<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css" >
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
		<script type="text/javascript" src="../../ajax.js"></script>
		<script type="text/javascript">
			
			function buscar_ingredientes(){
			
			var d1, d2, d3,d4, ajax, contenedor, url, param;
			contenedor = document.getElementById('ingredientes1');
			
			d1 = document.formu.receta.value;
			d2 = document.formu.ing.value;
			d3 = document.formu.cantidad_ing.value;
			d4 = document.formu.unidad_ing.value;

			ajax = nuevoAjax();
			url = "ajax_buscar_ingredientes.php"
			param = "receta="+d1+"&ing="+d2+"&cantidad_ing="+d3+"&unidad_ing="+d4;
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

				<h1>INGREDIENTES</h1>
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
			<b>RECETAS</b><br>
			<select name="receta" onchange="buscar_ingredientes()">
			<option value="">---seleccione---</option>
			{foreach item=r from=$ingredientes}
			<option value="{$r.receta}">{$r.receta}</option>
			{/foreach}
			</select>	
			</th>
			<th>
			<b>INGREDIENTES</b><br>
				<input type="text" name="ing" value="" size="10" onkeyup="buscar_ingredientes()">
			</th>
			<th>
			<b>CANTIDAD</b><br>
				<input type="float" name="cantidad_ing" value="" size="10" onkeyup="buscar_ingredientes()">
			</th>
			<th>
			<b>UNIDAD</b><br>
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
				<th>NRO</th><th>RECETA</th><th>INGREDIENTE</th><th>CANTIDAD</th><th>UNIDAD</th>
			</tr>
			{assign var="b" value='1'}
			{foreach item=r from=$ingredientes}
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
