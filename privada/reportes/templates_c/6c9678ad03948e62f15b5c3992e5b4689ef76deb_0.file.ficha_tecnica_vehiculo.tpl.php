<?php
/* Smarty version 3.1.36, created on 2022-10-13 21:06:53
  from 'C:\wamp6\www\sis_supermercado\privada\reportes\templates\ficha_tecnica_vehiculo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6348b62d71b611_52160161',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c9678ad03948e62f15b5c3992e5b4689ef76deb' => 
    array (
      0 => 'C:\\wamp6\\www\\sis_supermercado\\privada\\reportes\\templates\\ficha_tecnica_vehiculo.tpl',
      1 => 1665709367,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6348b62d71b611_52160161 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="esp">
<head>
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
	<meta charset="utf-8">
	<?php echo '<script'; ?>
 type="text/javascript" src="../../ajax.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript">
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
	<?php echo '</script'; ?>
>
	
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
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clientes']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
</option>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
</html><?php }
}
