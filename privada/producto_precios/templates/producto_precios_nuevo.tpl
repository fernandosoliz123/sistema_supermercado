<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../{$direc_css}"type="text/css">
	<script type="text/javascript" src="../js/expresiones_regulares.js"></script>
	<script type="text/javascript" src="js/validar_producto_precio.js"></script>
<script type="text/javascript" src="../../ajax.js"></script>
	<script type="text/javascript">
		function buscar(){
			
			var d1, contenedor, url;
			contenedor = document.getElementById('productos');
			contenedor2 = document.getElementById('producto_seleccionado');
			contenedor3 = document.getElementById('producto_insertado');
			
			d1 = document.formu.nombre.value;


			ajax = nuevoAjax();
			url = "ajax_buscar_producto.php"
			param = "nombre="+d1;
			ajax.open("POST",url,true);
			ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			ajax.onreadystatechange = function(){
				if (ajax.readyState == 4){
					contenedor.innerHTML = ajax.responseText;
					contenedor2.innerHTML = "";
					contenedor3.innerHTML = "";
				}
			}
			ajax.send(param);
		}
		function buscar_producto(id_producto){
			var d1, contenedor, url;
			contenedor = document.getElementById('producto_seleccionado');
			contenedor2 = document.getElementById('productos');
			document.formu.id_producto.value = id_producto;

			d1 = id_producto;

			ajax = nuevoAjax();
			url = "ajax_buscar_producto1.php"
			param = "id_producto="+d1;
			ajax.open("POST", url, true);
			ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			ajax.onreadystatechange = function(){

				if (ajax.readyState == 4){
					contenedor.innerHTML = ajax.responseText;
					contenedor2.innerHTML = "";
				}
			}
			ajax.send(param);			
		}

		function insertar_producto(){

			var d1, contenedor, url;
			contenedor = document.getElementById('producto_seleccionado');
			contenedor2 = document.getElementById('productos');
			contenedor3 = document.getElementById('producto_insertado');
			d1 = document.formu.nombre1.value;
			

			if (d1 == ""){
				alert("Por favor introduzca un Producto");
				document.formu.nombre1.focus();
				return;
			}

		
			ajax = nuevoAjax();
			url = "ajax_inserta_producto.php";
			
			param = "nombre1="+d1;
          
			
			ajax.open("POST",url,true);

			ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			
			ajax.onreadystatechange = function(){
				if (ajax.readyState == 4){
					contenedor.innerHTML = "";
					contenedor2.innerHTML = "";
					contenedor3.innerHTML = ajax.responseText;
				}
			}
			ajax.send(param);
		}
	</script>
</head>
<body>
	<h1>REGISTAR PRODUCTO</h1>
	<center>
	<form action="producto_precios_nuevo1.php" method="post" name="formu">
		<table border="1">
			<tr>
				<th align="rigth">Seleccione Producto(*)</th>
				<th>:</th>
				<td>
					<table>
						<tr>
							
			<td>
			<b>Nombre</b><br>
				<input type="text" name="nombre" value="" size="10" onkeyup="buscar()">
			</td>
						</tr>
					</table>
				</td>
			</tr>
<tr>
	<td colspan="6">
		<table width="100%">
			<tr>
				<td colspan="3">
					<div id="productos"></div>					
				</td>
			</tr>		
		</table>
	</td>
</tr>
<tr>
	<td colspan="6">
		<table width="100%">
			<tr>
				<td colspan="3">
					<div id="producto_seleccionado"></div>
				</td>
			</tr>
		</table>
	</td>
</tr>
<tr>
	<td colspan="6">
		<table width="100%">
			<tr>
				<td colspan="3">
					<input type="hidden" name="id_producto">
					<div id="producto_insertado"></div>
				</td>
			</tr>
		</table>
	</td>
</tr>
<tr>
	<th align="rigth">Precio(*)</th>
	<th>:</th>
	<td><input type="text" name="precio"></td>
</tr>
<tr>
	<th align="rigth">Fecha Asignada(*)</th>
	<th>:</th>
	<td><input type="date" name="fecha_asignada"></td>
</tr>
<tr>
<td align="center" colspan="3">
	<input type="hidden" name="accion" value="">
	<input type="button" value="Aceptar" onclick="validar();">
	<input type="button" value="Cancelar" onclick="javascript.location.href='producto_precios.php';">
</td>
</tr>
</table>
<table>
	<tr>
		<td colspan="3" align="center"><b>(*)Campos Obligatorios</b></td>
	</tr>
</table>
	</form>
	</center>
</body>
</html>
