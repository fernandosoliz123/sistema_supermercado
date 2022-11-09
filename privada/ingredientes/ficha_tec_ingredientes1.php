<?php
session_start();/*inicio de sesion*/
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$id_persona = $_REQUEST["id_ingrediente"];


$smarty = new Smarty;

//$db->debug=true;


$sql = $db->Prepare("SELECT *
					FROM ingredientes
					WHERE id_ingrediente = ?
				
					");
$rs = $db->GetAll($sql, array($id_ingrediente));

$sql1 = $db->Prepare("SELECT *
 	 					FROM SuperMercado
 	 					WHERE id_superMercado = 1
 	 					AND estado <> '0'
 	 					");
$rs1 = $db->GetAll($sql1);
$nombre = $rs1[0]["nombre"];
$Logo= $rs1[0]["Logo"];
$smarty->assign("Logo",$Logo);

$smarty->assign("ingrediente",$rs);
$smarty->assign("direc_css",$direc_css);
$smarty->display("ficha_tec_ingredientes1.tpl");
?>