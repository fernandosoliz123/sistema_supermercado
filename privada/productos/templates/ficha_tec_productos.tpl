<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../{$direc_css}">
	<meta charset="utf-8">
	<script type="text/javascript" src="../../ajax.js"></script>
	<script type="text/javascript">
		function buscar(){
			
			var d1, ajax, contenedor, url, param;
			contenedor = document.getElementById('productos1');
			
			d1 = document.formu.nombre_producto.value;


			ajax = nuevoAjax();
			url = "ajax_buscar_producto.php"
			param = "nombre_producto="+d1;
			ajax.open("POST",url,true);
			ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			ajax.onreadystatechange = function(){
				if (ajax.readyState == 4){
					contenedor.innerHTML = ajax.responseText;
				}
			}
			ajax.send(param);
		}

		function mostrar(id_producto){
			var d1, ventanaCalendario;
			d1 = id_producto;
			//alert(id_persona);
			ventanaCalendario = window.open ("ficha_tec_productos1.php?id_producto="+d1 , "calendario" , "width=600 , height=550 ,left=100,top=100 ,scrollbars=yes ,menubars=no ,statusbar=NO , status=NO, resizable=YES ,location=NO" )

		}
	</script>
</head>
<body>
	<!----------BUSCADOR------------->
	<div class="titulo_listado">
		<h1>
			FICHA TECNICA PRODUCTOS
		</h1>
	</div>
	<center>
	<form action="#" method="post" name="formu">
		<table border="1">
			<tr>
			<th>
			<b>Nombre del Producto</b><br>
			<input type="text" name="nombre_producto" value="" size="10" onkeyup="buscar()">
			</th>
	</tr>
</table>
</form>
</center>
	<center>
		<div id="productos1"></div>
	</center>
</body>
</html>
