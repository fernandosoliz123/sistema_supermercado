<?php
/* Smarty version 3.1.36, created on 2022-09-16 03:59:02
  from 'C:\wamp64\www\sis_libreria\privada\maquinas\templates\maquinas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6323f486567b32_45730013',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02eec832b76f4199ff0de06214c0e95a1a42d5e9' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_libreria\\privada\\maquinas\\templates\\maquinas.tpl',
      1 => 1663299471,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6323f486567b32_45730013 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css" >
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">

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
				<h1>MAQUINAS</h1>
			</td>
			<td align="right" width="33%">
				<form name="formNuveo" method="post" action="maquinas_nuevo.php">
					<a href="javascript:document.formNuveo.submit();">
						Nuevo>>>
					</a>
				</form>
			</td>
		</tr>
	</table>

	<center>
		<table class="listado">
			<tr>
				<th>NRO</th><th>MAQUINA</th><th>COMPANIA LIMPIEZA</th><th>DIRECCION</th>
			</tr>
			<?php $_smarty_tpl->_assignInScope('b', '1');?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['maquinas']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
			<tr>
				<td align="center"><?php echo $_smarty_tpl->tpl_vars['b']->value;?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['nombre_compania'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['direccion'];?>
</td>

				<?php $_smarty_tpl->_assignInScope('b', ((string)($_smarty_tpl->tpl_vars['b']->value+1)));?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</tr>
		</table>

	</center>
</body>
</html>
<?php }
}
