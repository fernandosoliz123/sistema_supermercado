<?php
/* Smarty version 3.1.36, created on 2022-10-13 20:48:27
  from 'C:\wamp6\www\sis_supermercado\privada\claves\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6348b1dbd836b7_94340054',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1fa65311fb715d61eb306ab0d1527fd4d515e9bf' => 
    array (
      0 => 'C:\\wamp6\\www\\sis_supermercado\\privada\\claves\\templates\\index.tpl',
      1 => 1650415748,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6348b1dbd836b7_94340054 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
   <?php echo '<script'; ?>
 type="text/javascript">
      function refrescar (){
         var p = window.parent;
         p.location.href='../';
      }
   <?php echo '</script'; ?>
>
</head>
<body ONLOAD="self.setTimeout('refrescar()',5000);"> 
   <center>
      <h1><?php echo $_smarty_tpl->tpl_vars['mensage']->value;?>
</h1>
      <h3 style="color:red;"><?php echo $_smarty_tpl->tpl_vars['nom_completo']->value;?>
</h3>
      <h1><?php echo $_smarty_tpl->tpl_vars['mensage1']->value;?>
</h1>
   </center>
</body>
</html><?php }
}
