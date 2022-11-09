<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty = new Smarty;

$sql = $db->Prepare("SELECT *
					FROM marcas ma
					WHERE ma.estado <> '0'
					ORDER BY ma.id_marca DESC
					");
$rs = $db->GetAll($sql);

$smarty->assign("marcas", $rs);

$smarty->assign("direc_css", $direc_css);
$smarty->display("producto_nuevo.tpl");
?>