<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$id_producto=$_REQUEST["id_producto"];
$id_marca=$_REQUEST["id_marca"];

$smarty = new Smarty;

$sql = $db->Prepare("SELECT *
					  FROM productos
					  WHERE id_producto= ?
					");
$rs=$db->GetAll($sql, array($id_producto));


$sql2 = $db->Prepare("SELECT *
					  FROM marcas
					  WHERE id_marca = ?
					  AND estado <> '0'
					");
$rs2=$db->GetAll($sql2, array($id_marca));


$sql3 = $db->Prepare("SELECT *
					  FROM marcas
					  WHERE id_marca <> ?
					  AND estado<> '0'
					");
$rs3=$db->GetAll($sql3, array($id_marca));

$smarty->assign("producto", $rs);
$smarty->assign("marca", $rs2);
$smarty->assign("marcas", $rs3);
$smarty->assign("direc_css", $direc_css);
$smarty->display("producto_modificar.tpl");
?>