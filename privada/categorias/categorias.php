<?php
session_start();/*inicio de sesion*/
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");
require_once("../paginacion.inc.php");

$smarty = new Smarty;

$db->debug=true;

contarRegistros($db,"categorias");

paginacion("categorias.php?",$smarty);

$sql3 = $db->Prepare("SELECT *
					FROM categorias
					WHERE estado <> '0'
					AND id_categoria > 1
					ORDER BY id_categoria DESC
					LIMIT ? OFFSET ?
					");
$smarty->assign("categoria",$db->GetAll($sql3, array($nElem, $regIni)));


$smarty->assign("direc_css",$direc_css);
$smarty->display("categorias.tpl");
?>