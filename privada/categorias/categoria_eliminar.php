<?php

session_start();


require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");


$id_categoria = $_REQUEST["id_categoria"];


$smarty = new Smarty;
$db->debug=true;

$sql = $db->Prepare("SELECT *
					  FROM usuarios
					  WHERE id_categoria = ?
					  AND estado <> '0'
					");
$rs = $db->GetAll($sql, array($id_categoria));

if(!$rs){
	$reg = array ();
	$reg["estado"] ='0';
	$reg["usuario"] = $_SESSION["sesion_id_usuario"];
	$rs1 = $db->AutoExecute("categorias", $reg, "UPDATE", "id_categoria='".$id_categoria."'");
	header("Location: categorias.php");
    exit();

} else { 
	$smarty->assign("mensaje", "ERROR: Los datos no se eliminaron!!!!!!!");
	$smarty->display("categoria_eliminar.tpl");
}
?>

