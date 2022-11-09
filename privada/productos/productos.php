<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty = new Smarty;

/*$db->debug=true;*/

$sql = $db->Prepare("SELECT *
					FROM productos pe
					INNER JOIN marcas ma ON pe.id_marca = ma.id_marca				
					AND pe.estado <> '0'
					AND ma.estado <> '0'
					ORDER BY pe.id_marca DESC
					");
$rs = $db->GetAll($sql);

$smarty->assign("productos",$rs);
$smarty->assign("direc_css",$direc_css);
$smarty->display("productos.tpl");
?>