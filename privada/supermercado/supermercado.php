<?php
session_start();/*inicio de sesion*/

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");



$smarty = new Smarty;

$db->debug=true;

$sql = $db->Prepare("SELECT *
					FROM SuperMercado
					WHERE id_superMercado = 1
					");
$rs =$db->GetAll($sql);
$smarty->assign("SuperMercado",$rs);


$smarty->assign("direc_css", $direc_css);
$smarty->display("supermercado.tpl");
?>



	