<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");


$id_superMercado = $_REQUEST["id_superMercado"];
$nombre = $_POST["nombre"];
$Email = $_POST["Email"];
$logo_superMercado1 = $_POST["logo_superMercado1"];
$nombre_log = $_FILES["Logo"]['name'];

$db->debug=true;

$smarty = new Smarty;
//ESTO ES PARA GUARDAR LA FOTO
if ((!empty($_FILES['Logo'])) and is_uploaded_file($_FILES['Logo']['tmp_name'])){
	copy($_FILES['Logo']['tmp_name'],'logos/'.$nombre_log);
	$logo_superMercado = $_FILES['Logo']['name'];
}elseif ($logo_superMercado1 == "") {
	$Logo = '';
	$nombre_log = '';
}else
$nombre_log = $logo_superMercado1;

$reg = array();
$reg["nombre"] = $nombre;
$reg["Email"] = $Email;
$reg["Logo"] = $nombre_log;
$reg["usuario"] = $_SESSION["sesion_id_usuario"];
$rs1 = $db->AutoExecute("supermercado", $reg, "UPDATE", "id_superMercado='".$id_superMercado."'");

if ($rs1) {
	$smarty->assign("mensaje", "Los datos se modificaron ACTUALIZAR EL SISTEMA!!!!!!!");
	$smarty->assign("direc_css",$direc_css);
	$smarty->display("supermercado1.tpl");
}else{
	$smarty->assign("mensaje", "ERROR: Los datos no se insertaron!!!!!!!");
	$smarty->assign("direc_css",$direc_css);
	$smarty->display("supermercado1.tpl");
}

?>