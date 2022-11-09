<?php
/* Smarty version 3.1.36, created on 2022-10-17 21:50:26
  from 'C:\wamp6\www\sis_supermercado\privada\productos1\templates\productos_nuevo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_634e0662676681_42478558',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '921e0d2162aaf89656e393ad4514a1d58ee0ad29' => 
    array (
      0 => 'C:\\wamp6\\www\\sis_supermercado\\privada\\productos1\\templates\\productos_nuevo.tpl',
      1 => 1666057817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634e0662676681_42478558 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
">
	<?php echo '<script'; ?>
 type="text/javascript" src="../js/expresiones_regulares.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/validar_ingrediente.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="../../ajax.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript">
		function buscar(){
			
			var d1, contenedor, url;
			contenedor = document.getElementById('recetas');
			contenedor2 = document.getElementById('receta_seleccionado');
			contenedor3 = document.getElementById('receta_insertado');
			
			d1 = document.formu.receta.value;
			d2 = document.formu.foto.value;
			

			ajax = nuevoAjax();
			url = "ajax_buscar_receta.php"
			param = "receta="+d1+"&foto="+d2;
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
		function buscar_receta(id_receta){
			var d1, contenedor, url;
			contenedor = document.getElementById('receta_seleccionado');
			contenedor2 = document.getElementById('recetas');
			document.formu.id_receta.value = id_receta;

			d1 = id_receta;

			ajax = nuevoAjax();
			url = "ajax_buscar_receta1.php"
			param = "id_receta="+d1;
			ajax.open("POST",url, true);
			ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			ajax.onreadystatechange = function(){

				if (ajax.readyState == 4){
					contenedor.innerHTML = ajax.responseText;
					contenedor2.innerHTML = "";
				}
			}
			ajax.send(param);			
		}

		function insertar_receta(){

			var d1, contenedor, url;
			contenedor = document.getElementById('receta_seleccionado');
			contenedor2 = document.getElementById('recetas');
			contenedor3 = document.getElementById('receta_insertado');
			d1 = document.formu.receta1.value;
			d2 = document.formu.foto1.value;
			d3 = document.formu.fecha_realizacion1.value;
			


			if (d1 == ""){
				alert("El nombre es incorrecto o el campo esta vacio");
				document.formu.receta1.focus();
				return;
			}

			if (d3 == ""){
			alert("La fecha es incorrecto o el campo esta vacio");
			document.formu.fecha_realizacion1.focus();
			return;
			}
			
		
			ajax = nuevoAjax();
			url = "ajax_inserta_receta.php";
			
			param = "receta="+d1+"&foto="+d2+"&fecha_realizacion="+d3;
          
			
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
	<?php echo '</script'; ?>
>
</head>
<body>
	<h1>REGISTAR PRODUCTOS</h1>
	<center>
	<form action="productos_nuevo1.php" method="post" name="formu">
		<table border="1">
			<tr>
				<th align="rigth">Seleccione el nombre del proveedor(*)</th>
				<th>:</th>
				<td>
					<table>
						<tr>
							<td>
			<b>Nombre</b><br>
			<input type="text" name="nombre" value="" size="10" onkeyup="buscar()">
			</td>
			<td>
			<b>Direccion</b><br>
				<input type="text" name="direccion" value="" size="10" onkeyup="buscar()">
			</td>
			<td>
			<b>telefono</b><br>
				<input type="text" name="telefono" value="" size="10" onkeyup="buscar()">
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
					<div id="recetas"></div>					
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
					<div id="receta_seleccionado"></div>
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
					<input type="hidden" name="id_receta">
					<div id="receta_insertado"></div>
				</td>
			</tr>
		</table>
	</td>
</tr>
<tr>
	<th align="rigth">descripcion(*)</th>
	<th>:</th>
	<td><input type="text" name="ingrediente"></td>
</tr>
<tr>
	<th align="rigth">Modelo(*)</th>
	<th>:</th>
	<td><input type="float" name="cantidad"></td>
</tr>
<tr>
	<th align="rigth">Marca(*)</th>
	<th>:</th>
	<td><input type="text" name="unidad"></td>
</tr>
<tr>
<td align="center" colspan="3">
	<input type="hidden" name="accion" value="">
	<input type="button" value="Aceptar" onclick="validar();">
	<input type="button" value="Cancelar" onclick="javascript.location.href='ingredientes.php';">
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
<?php }
}
