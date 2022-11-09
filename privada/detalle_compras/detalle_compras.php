<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty = new Smarty;

/*$db->debug=true;*/

$sql = $db->Prepare("SELECT *
					FROM detalle_compras ve, compras com
					WHERE ve.id_compra = com.id_compra
					AND ve.estado <> '0'
					AND com.estado <> '0'
					ORDER BY ve.id_compra DESC
					");
$rs = $db->GetAll($sql);

$smarty->assign("detalle_compras",$rs);
$smarty->assign("direc_css",$direc_css);
$smarty->display("detalle_compras.tpl");
?>