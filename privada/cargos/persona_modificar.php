<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$id_cargo=$_REQUEST["id_cargo"];


$smarty = new Smarty;

$sql = $db->Prepare("SELECT *
					  FROM cargos
					  WHERE id_cargo = ?
					");
$rs=$db->GetAll($sql, array($id_cargo));
$smarty->assign("cargo" ,$rs);


$smarty->assign("direc_css", $direc_css);
$smarty->display("cargo_modificar.tpl");
?>