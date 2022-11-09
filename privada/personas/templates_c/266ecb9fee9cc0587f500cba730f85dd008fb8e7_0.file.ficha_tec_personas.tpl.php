<?php
/* Smarty version 3.1.36, created on 2022-09-27 09:24:55
  from 'C:\wamp6\www\sis_supermercado\privada\personas\templates\ficha_tec_personas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6332f9a7d50f93_67621467',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '266ecb9fee9cc0587f500cba730f85dd008fb8e7' => 
    array (
      0 => 'C:\\wamp6\\www\\sis_supermercado\\privada\\personas\\templates\\ficha_tec_personas.tpl',
      1 => 1662611820,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6332f9a7d50f93_67621467 (Smarty_Internal_Template $_smarty_tpl) {
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
			
			var d1, d2, d3, d4, ajax, contenedor, url, param;
			contenedor = document.getElementById('personas1');
			
			d1 = document.formu.paterno.value;
			d2 = document.formu.materno.value;
			d3 = document.formu.nombres.value;
			d4 = document.formu.ci.value;

			ajax = nuevoAjax();
			url = "ajax_buscar_personas.php"
			param = "paterno="+d1+"&materno="+d2+"&nombres="+d3+"&ci="+d4;
			ajax.open("POST",url,true);
			ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			ajax.onreadystatechange = function(){
				if (ajax.readyState == 4){
					contenedor.innerHTML = ajax.responseText;
				}
			}
			ajax.send(param);
		}

		function mostrar(id_persona){
			var d1, ventanaCalendario;
			d1 = id_persona;
			//alert(id_persona);
			ventanaCalendario = window.open ("ficha_tec_personas1.php?id_persona="+d1 , "calendario" , "width=600 , height=550 ,left=100,top=100 ,scrollbars=yes ,menubars=no ,statusbar=NO , status=NO, resizable=YES ,location=NO" )

		}
	<?php echo '</script'; ?>
>
</head>
<body>
	<!----------BUSCADOR------------->
	<div class="titulo_listado">
		<h1>
			FICHA TECNICA PERSONAS
		</h1>
	</div>
	<center>
	<form action="#" method="post" name="formu">
		<table border="1">
			<tr>
			<th>
			<b>Paterno</b><br>
			<input type="text" name="paterno" value="" size="10" onkeyup="buscar()">
			</th>
			<th>
			<b>Materno</b><br>
				<input type="text" name="materno" value="" size="10" onkeyup="buscar()">
			</th>
			<th>
			<b>Nombres</b><br>
				<input type="text" name="nombres" value="" size="10" onkeyup="buscar()">
			</th>
			<th>
			<b>C.I.</b><br>
				<input type="text" name="ci" value="" size="10" onkeyup="buscar()">
		</th>
	</tr>
</table>
</form>
</center>
	<center>
		<div id="personas1"></div>
	</center>
</body>
</html>
<?php }
}
