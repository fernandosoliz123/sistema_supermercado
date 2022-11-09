<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$id_empleado=$_REQUEST["id_empleado"];
$id_cargo=$_REQUEST["id_cargo"];


$smarty=new Smarty;

	$sql=$db->Prepare("SELECT*
					FROM empleados
					WHERE id_empleado?
					");
	$rs=$db->GetAll($sql, array($id_empleado));
	$sql2=$db->Prepare("SELECT*
					FROM cargos
					WHERE id_cargo=?
					AND estado<>'0'
					");
	$rs2=$db->GetAll($sql2, array($id_cargo));
	$sql3=$db->Prepare("SELECT*
					FROM cargos
					WHERE id_cargo<>?
					AND estado<>'0'
					");
	$rs3=$db->GetAll($sql3, array($id_cargo));
	$smarty->assign("empleado",$rs);
	$smarty->assign("cargo",$rs2);
	$smarty->assign("cargos",$rs3);
	$smarty->assign("direc_css",$direc_css);
	$smarty->display("empleado_modificar.tpl");

?>