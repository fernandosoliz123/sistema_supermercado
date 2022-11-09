<?php 
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$id_precio = $_REQUEST["id_precio"];
$id_producto = $_REQUEST["id_producto"];

$smarty = new Smarty;

//$db->debug=true;

$sql = $db->Prepare("SELECT *
 					FROM producto_precios
 					WHERE id_precio = ?
 					");
$rs = $db->GetAll($sql, array($id_precio));


$sql1 = $db->Prepare("SELECT *
 					FROM productos
 					WHERE id_producto = ?
 					AND estado <> '0'
 					");
$rs1 = $db->GetAll($sql1, array($id_producto));

$sql2 = $db->Prepare("SELECT *
 					FROM productos
 					WHERE id_producto <> ?
 					AND estado <> '0'
 					");
$rs2 = $db->GetAll($sql2, array($id_producto));

$smarty->assign("producto_precios", $rs);
$smarty->assign("producto", $rs1);
$smarty->assign("productos", $rs2);
$smarty->assign("direc_css", $direc_css);
$smarty->display("producto_precios_modificar.tpl");
?>