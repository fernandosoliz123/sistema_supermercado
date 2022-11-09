<?php
/* Smarty version 3.1.36, created on 2022-10-22 01:49:13
  from 'C:\wamp6\www\sis_supermercado\privada\ingredientes\templates\ficha_tec_ingredientes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_635384598fa136_25858899',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5397b91c46410ea18581c4add77340f5422c2bae' => 
    array (
      0 => 'C:\\wamp6\\www\\sis_supermercado\\privada\\ingredientes\\templates\\ficha_tec_ingredientes.tpl',
      1 => 1666417732,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_635384598fa136_25858899 (Smarty_Internal_Template $_smarty_tpl) {
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
	<?php echo '</script'; ?>
>
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
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recetas']->value, 'r');
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
<?php }
}
