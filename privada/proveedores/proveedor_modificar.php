<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$id_proveedor = $_REQUEST["id_proveedor"];

$smarty = new Smarty;

$sql = $db->Prepare("SELECT *
	                 FROM proveedores 
	                 WHERE id_proveedor = ? 
	                 ");
$rs = $db->GetAll($sql, array($id_proveedor));
$smarty->assign("persona", $rs);
$smarty->assign("direc_css", $direc_css);
$smarty->display("proveedor_modificar.tpl");
?>
