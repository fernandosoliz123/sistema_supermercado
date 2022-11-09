<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../{$direc_css}">
	<meta charset="utf-8">
	<script type="text/javascript" src="../../ajax.js"></script>
	<script type="text/javascript">
		function buscar(){
			
			var d1, d2, d3, ajax, contenedor, url, param;
			contenedor = document.getElementById('recetas');
			
			d1 = document.formu.receta.value;
			d2 = document.formu.ingredientes.value;
			d3 = document.formu.unidad.value;
	

			ajax = nuevoAjax();
			url = "ajax_buscar_ing_receta.php"
			param = "receta="+d1+"&ingredientes="+d2+"&unidad="+d3;
			ajax.open("POST",url,true);
			ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			ajax.onreadystatechange = function(){
				if (ajax.readyState == 4){
					contenedor.innerHTML = ajax.responseText;
				}
			}
			ajax.send(param);
		}

		function mostrar(id_receta){
			var d1, ventanaCalendario;
			d1 = id_receta;
			//alert(id_vehiculo);
			ventanaCalendario = window.open ("ficha_tecnica_ingredientes1.php?id_receta="+d1 , "calendario" , "width=600 , height=550 ,left=100,top=100 ,scrollbars=yes ,menubars=no ,statusbar=NO , status=NO, resizable=YES ,location=NO" )

		}
	</script>
</head>
<body>
	<!----------BUSCADOR------------->
	<div class="titulo_listado">
		<h1>
			FICHA TECNICA RECETAS 
		</h1>
	</div>
	<center>
	<form action="#" method="post" name="formu">
		<table border="1">
			<tr>
			<th>
			<b>RECETAS</b><br>
			<select name="receta" onchange="buscar()">
			<option value="">---seleccione---</option>
			{foreach item=r from=$recetas}
			<option value="{$r.receta}">{$r.receta}</option>
			{/foreach}
			</select>	
			</th>
			<th>
			<b>Ingredientes</b><br>
				<input type="text" name="ingredientes" value="" size="10" onkeyup="buscar()">
			</th>
			<th>
			<b>Unidad</b><br>
				<input type="text" name="unidad" value="" size="10" onkeyup="buscar()">
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
