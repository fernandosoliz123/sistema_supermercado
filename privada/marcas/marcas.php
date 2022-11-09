<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty = new Smarty;

/*$db->debug=true;*/
$sql = $db->Prepare("SELECT *
					FROM marcas ve
					INNER JOIN proveedores com ON ve.id_proveedor = com.id_proveedor
					AND ve.estado <> '0'
					AND com.estado <> '0'
					ORDER BY ve.id_proveedor DESC
					");
/*
$sql = $db->Prepare("SELECT *
					FROM marcas ve, proveedores com
					WHERE ve.id_proveedor = com.id_proveedor
					AND ve.estado <> '0'
					AND com.estado <> '0'
					ORDER BY ve.id_proveedor DESC
					");
					*/
$rs = $db->GetAll($sql);

$smarty->assign("marcas",$rs);
$smarty->assign("direc_css",$direc_css);
$smarty->display("marcas.tpl");
?>