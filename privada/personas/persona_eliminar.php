<?php

session_start();


require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");


$id_persona = $_REQUEST["id_persona"];


$smarty = new Smarty;
//$db->debug=true;

$sql = $db->Prepare("SELECT *
					  FROM usuarios
					  WHERE id_persona = ?
					  AND estado <> '0'
					");
$rs = $db->GetAll($sql, array($id_persona));

if(!$rs){
	$reg = array ();
	$reg["estado"] ='0';
	$reg["usuario"] = $_SESSION["sesion_id_usuario"];
	$rs1 = $db->AutoExecute("personas", $reg, "UPDATE", "id_persona='".$id_persona."'");
	header("Location: personas.php");
    exit();

} else { 
	$smarty->assign("mensaje", "ERROR: Los datos no se eliminaron!!!!!!!");
	$smarty->display("persona_eliminar.tpl");
}
?>

