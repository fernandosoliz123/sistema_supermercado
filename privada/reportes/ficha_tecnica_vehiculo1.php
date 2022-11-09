<?php
session_start();/*inicio de sesion*/
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$id_vehiculo = $_REQUEST["id_vehiculo"];


$smarty = new Smarty;

$db->debug=true;

					
$sql = $db->Prepare("SELECT *
					FROM vehiculos v, clientes1 c	
					WHERE c.id_cliente = ?
					AND c.id_cliente=v.id_cliente			
					");

$rs = $db->GetAll($sql, array($id_vehiculo));

$sql1 = $db->Prepare("SELECT *
 	 					FROM SuperMercado
 	 					WHERE id_superMercado = 1
 	 					AND estado <> '0'
 	 					");

$rs1 = $db->GetAll($sql1);

$nombre = $rs1[0]["nombre"];
$Logo= $rs1[0]["Logo"];
$smarty->assign("Logo",$Logo);

$smarty->assign("vehiculos",$rs);
$smarty->assign("direc_css",$direc_css);
$smarty->display("ficha_tecnica_vehiculo1.tpl");
?>