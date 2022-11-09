<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty = new Smarty;

/*$db->debug=true;*/

$sql = $db->Prepare("SELECT *
					FROM marcas pe, proveedores cl
					WHERE pe.id_proveedor = cl.id_proveedor
					AND pe.estado <> '0'
					AND cl.estado <> '0'
					ORDER BY pe.id_proveedor DESC
					");
$rs = $db->GetAll($sql);

$smarty->assign("marcas",$rs);
$smarty->assign("direc_css",$direc_css);
$smarty->display("marcas.tpl");
?>