<?php 
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$__id_marca = $_REQUEST["id_marca"];
$__id_proveedor = $_REQUEST["id_proveedor"];

$smarty = new Smarty;

//$db->debug=true;

$sql = $db->Prepare("SELECT *
 					FROM marcas
 					WHERE id_marca = ?
 					");
$rs = $db->GetAll($sql, array($__id_marca));

$sql2 = $db->Prepare("SELECT *
 					FROM proveedores
 					WHERE id_proveedor = ?
 					AND estado <> '0'
 					");
$rs2 = $db->GetAll($sql2, array($__id_proveedor));

$sql3 = $db->Prepare("SELECT *
 					FROM proveedores
 					WHERE id_proveedor <> ?
 					AND estado <> '0'
 					");
$rs3 = $db->GetAll($sql3, array($__id_proveedor));

$smarty->assign("marca", $rs);
$smarty->assign("proveedor", $rs2);
$smarty->assign("proveedores", $rs3);
$smarty->assign("direc_css", $direc_css);
$smarty->display("marca_modificar.tpl");
?>