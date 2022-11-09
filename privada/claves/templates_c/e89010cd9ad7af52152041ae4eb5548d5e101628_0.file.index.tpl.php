<?php
/* Smarty version 3.1.36, created on 2022-09-09 13:58:55
  from 'C:\wamp64\www\sis_supermercado\privada\claves\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_631b469f183335_54102699',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e89010cd9ad7af52152041ae4eb5548d5e101628' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_supermercado\\privada\\claves\\templates\\index.tpl',
      1 => 1650415748,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_631b469f183335_54102699 (Smarty_Internal_Template $_smarty_tpl) {
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
