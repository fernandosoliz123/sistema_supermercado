<?php
/* Smarty version 3.1.36, created on 2022-10-13 21:03:50
  from 'C:\wamp6\www\sis_supermercado\privada\ingredientes\templates\ingredientes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6348b576ce6fa2_12517907',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0b7efd7eaa333da5c83a3c899b2fbd3fc92074d' => 
    array (
      0 => 'C:\\wamp6\\www\\sis_supermercado\\privada\\ingredientes\\templates\\ingredientes.tpl',
      1 => 1663722304,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6348b576ce6fa2_12517907 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css" >
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
		<?php echo '<script'; ?>
 type="text/javascript" src="../../ajax.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript">
			
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
		<?php echo '</script'; ?>
>
		
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
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ingredientes']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['receta'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['receta'];?>
</option>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
			<?php $_smarty_tpl->_assignInScope('b', '1');?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ingredientes']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
			<tr>
				<td align="center"><?php echo $_smarty_tpl->tpl_vars['b']->value;?>
</td>
				<td align="center"><?php echo $_smarty_tpl->tpl_vars['r']->value['receta'];?>
</td>
				<td align="center"><?php echo $_smarty_tpl->tpl_vars['r']->value['ingrediente'];?>
</td>
				<td align="center"><?php echo $_smarty_tpl->tpl_vars['r']->value['cantidad'];?>
</td>
				<td align="center"><?php echo $_smarty_tpl->tpl_vars['r']->value['unidad'];?>
</td>
				
				<?php $_smarty_tpl->_assignInScope('b', ((string)($_smarty_tpl->tpl_vars['b']->value+1)));?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</tr>
		</table>

	</div>
	</center>
</body>
</html>
<?php }
}
