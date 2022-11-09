<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$id_compra=$_REQUEST["id_compra"];


$smarty = new Smarty;

$sql = $db->Prepare("SELECT *
					  FROM compras
					  WHERE id_compra = ?
					");
$rs=$db->GetAll($sql, array($id_compra));
$smarty->assign("compras" ,$rs);


$smarty->assign("direc_css", $direc_css);
$smarty->display("compra_modificar.tpl");
?>