<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty = new Smarty;

$sql = $db->Prepare("SELECT *
					FROM productos p
					WHERE p.estado <> '0'
					ORDER BY p.id_producto DESC
					");
$rs = $db->GetAll($sql);

$smarty->assign("productos", $rs);

$smarty->assign("direc_css", $direc_css);
$smarty->display("producto_precios_nuevo.tpl");
?>