<?php
/* Smarty version 3.1.36, created on 2022-09-16 01:57:10
  from 'C:\wamp64\www\sis_libreria\privada\maquinas\templates\maquinas_nuevo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6323d7f6860763_41946703',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7de6ae0955db286636224d009a439a24bb14857f' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_libreria\\privada\\maquinas\\templates\\maquinas_nuevo.tpl',
      1 => 1663293312,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6323d7f6860763_41946703 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
">
	<?php echo '<script'; ?>
 type="text/javascript" src="../js/expresiones_regulares.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="../js/validar_maquina.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="../../ajax.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript">
		function buscar(){
			
			var d1, contenedor, url;
			contenedor = document.getElementById('companias');
			contenedor2 = document.getElementById('compania_seleccionado');
			contenedor3 = document.getElementById('compania_insertado');
			
			d1 = document.formu.nombre_compania.value;
			d2 = document.formu.direccion.value;
			d3 = document.formu.telefono.value;
			d4 = document.formu.logo_compania.value;
			ajax = nuevoAjax();
			url = "ajax_buscar_compania.php"
			param = "nombre_compania="+d1+"&direccion="+d2;
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
		function buscar_compania(id_compania_limpieza){
			var d1, contenedor, url;
			contenedor = document.getElementById('compania_seleccionado');
			contenedor2 = document.getElementById('companias');
			document.formu.id_compania_limpieza.value = id_compania_limpieza;

			d1 = id_compania_limpieza;

			ajax = nuevoAjax();
			url = "ajax_buscar_compania1.php"
			param = "id_compania_limpieza="+d1;
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

		function insertar_compania(){

			var d1, contenedor, url;
			contenedor = document.getElementById('compania_seleccionado');
			contenedor2 = document.getElementById('companias');
			contenedor3 = document.getElementById('compania_insertada');
			d1 = document.formu.nombre_compania1.value;
			d2 = document.formu.direccion.value;
			d3 = document.formu.telefono1.value;
			d4 = document.formu.logo_compania1.value;


			if (d1 == ""){
				alert("El campo es incorrecto o el campo esta vacio");
				document.formu.nombre_compania1.focus();
				return;
			}

			if (d2 == ""){
				alert("El campo es incorrecto o el campo esta vacio");
				document.formu.direccion1.focus();
				return;
			}

			if (d3 == ""){
			alert("El campo es incorrecto o el campo esta vacio");
			document.formu.telefono1.focus();
			return;
			}


			ajax = nuevoAjax();
			url = "ajax_inserta_compania.php";
			
			param = "nombre_compania1="+d1+"&direccion1="+d2+"&telefono1="+d3+"&logo_compania1="+d4;
          
			
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
	<h1>REGISTAR COMPANIA</h1>
	<center>
	<form action="maquinas_nuevo1.php" method="post" name="formu">
		<table border="1">
			<tr>
				<th align="rigth">Seleccione Compania(*)</th>
				<th>:</th>
				<td>
					<table>
						<tr>
							<td>
			<b>Nombre</b><br>
			<input type="text" name="nombre_limpieza" value="" size="10" onkeyup="buscar()">
			</td>
							<td>
			<b>Direccion</b><br>
			<input type="text" name="direccion" value="" size="10" onkeyup="buscar()">
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
					<div id="companias"></div>					
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
					<div id="compania_seleccionado"></div>
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
					<input type="hidden" name="id_compania_limpieza">
					<div id="compania_insertada"></div>
				</td>
			</tr>
		</table>
	</td>
</tr>
<tr>
	<th align="rigth">Nombre(*)</th>
	<th>:</th>
	<td><input type="text" name="nombre"></td>
</tr>
<tr>
	<th align="rigth">Tipo(*)</th>
	<th>:</th>
	<td><input type="text" name="tipo"></td>
</tr>
<tr>
	<th align="rigth">Precio(*)</th>
	<th>:</th>
	<td><input type="float" name="precio"></td>
</tr>
<tr>
<td align="center" colspan="3">
	<input type="hidden" name="accion" value="">
	<input type="button" value="Aceptar" onclick="validar();">
	<input type="button" value="Cancelar" onclick="javascript.location.href='maquinas.php';">
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
