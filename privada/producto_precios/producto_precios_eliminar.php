<?php

session_start();


require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");


$id_precio= $_REQUEST["id_precio"];


$smarty = new Smarty;


$sql = $db->Prepare("SELECT *
					  FROM producto_precios
					  WHERE id_precio= ?
					  AND estado <> '0'
					");
$rs=$db->GetAll($sql, array($id_precio));

if(!$rs){
	$reg = array();
	$reg["estado"] ='0';
	$reg["usuario"] = $_SESSION["sesion_id_usuario"];
	$rs1 = $db->AutoExecute("usuarios", $reg, "UPDATE", "id_usuario='".$id_usuario."'");
	header("Location:producto_precios.php");
    exit();

} else { 
	$smarty->assign("mensaje", "ERROR: Los datos no se eliminaron!!!!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->display("producto_precios_eliminar.tpl");
}
?>

