<?php
session_start();/*inicio de sesion*/
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$id_producto = $_REQUEST["id_producto"];


$smarty = new Smarty;

//$db->debug=true;


/*$sql = $db->Prepare("SELECT * 
 					FROM productos pro
 					WHERE id_producto = ?
 					INNER JOIN marcas ma ON pro.id_marca = ma.id_marca
 					INNER JOIN proveedores p ON p.id_proveedor = ma.id_proveedor
 					AND pro.estado <> '0' 
 					AND ma.estado <> '0'
 					AND p.estado <> '0'
 					ORDER BY (pro.id_producto) DESC 
 					");*/


$sql = $db->Prepare("SELECT * 
 					FROM productos p, marcas m, proveedores d
 					WHERE id_producto = ?
 					AND p.id_marca = m.id_marca
 					AND d.id_proveedor = m.id_proveedor
 					AND p.estado <> '0' 
 					AND m.estado <> '0' 
 					AND d.estado <> '0' 
 					ORDER BY (p.id_producto) DESC 
 					");


$rs = $db->GetAll($sql, array($id_producto));

$sql1 = $db->Prepare("SELECT *
 	 					FROM SuperMercado
 	 					WHERE id_superMercado = 1
 	 					AND estado <> '0'
 	 					");

$rs1 = $db->GetAll($sql1);
$nombre = $rs1[0]["nombre"];
$Logo= $rs1[0]["Logo"];
$smarty->assign("Logo",$Logo);

$smarty->assign("producto",$rs);
$smarty->assign("direc_css",$direc_css);
$smarty->display("ficha_tec_productos1.tpl");
?>