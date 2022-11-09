<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty = new Smarty;

/*$db->debug=true;*/

$sql = $db->Prepare("SELECT *
					FROM ventas ve, clientes cli
					WHERE ve.id_cliente = cli.id_cliente
					AND ve.estado <> '0'
					AND cli.estado <> '0'
					ORDER BY ve.id_cliente DESC
					");
$rs = $db->GetAll($sql);

$smarty->assign("ventas",$rs);
$smarty->assign("direc_css",$direc_css);
$smarty->display("ventas.tpl");
?>