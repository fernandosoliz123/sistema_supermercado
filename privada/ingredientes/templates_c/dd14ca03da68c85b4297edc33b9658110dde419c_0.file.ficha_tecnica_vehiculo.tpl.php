<?php
/* Smarty version 3.1.36, created on 2022-09-27 22:07:07
  from 'C:\wamp6\www\sis_supermercado\privada\ingredientes\templates\ficha_tecnica_vehiculo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6333ac4bd78735_80624870',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd14ca03da68c85b4297edc33b9658110dde419c' => 
    array (
      0 => 'C:\\wamp6\\www\\sis_supermercado\\privada\\ingredientes\\templates\\ficha_tecnica_vehiculo.tpl',
      1 => 1664330821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6333ac4bd78735_80624870 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
">
	<meta charset="utf-8">
	<?php echo '<script'; ?>
 type="text/javascript" src="../../ajax.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript">
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
	<?php echo '</script'; ?>
>
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
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['vehiculos']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['vehiculo'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['vehiculo'];?>
</option>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
<?php }
}
