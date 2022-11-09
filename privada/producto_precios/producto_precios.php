<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty = new Smarty;

//$db->debug=true;

$sql = $db->Prepare("SELECT *
					FROM producto_precios pr
					INNER JOIN productos p ON pr.id_producto = p.id_producto
					WHERE pr.id_producto = p.id_producto
					AND pr.estado <> '0'
					AND p.estado <> '0'
					ORDER BY pr.id_producto DESC
					");
$rs = $db->GetAll($sql);

$smarty->assign("producto_precios",$rs);
$smarty->assign("direc_css",$direc_css);
$smarty->display("producto_precios.tpl");
?>