<?php

session_start();


require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");


$id_marca = $_REQUEST["id_marca"];


$smarty = new Smarty;


$sql = $db->Prepare("SELECT *
					  FROM productos
					  WHERE id_marca = ?
					  AND estado <> '0'
					");
$rs=$db->GetAll($sql, array($id_marca));

if(!$rs){
	$reg = array();
	$reg["estado"] ='0';
	$reg["usuario"] = $_SESSION["sesion_id_usuario"];
	$rs1 = $db->AutoExecute("marcas", $reg, "UPDATE", "id_marca='".$id_marca."'");
	header("Location:marcas.php");
    exit();

} else { 
	$smarty->assign("mensaje", "ERROR: Los datos no se eliminaron!!!!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->display("marca_eliminar.tpl");
}
?>

