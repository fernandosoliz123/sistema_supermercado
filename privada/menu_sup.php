<?php
session_start();
require_once("../smarty/libs/Smarty.class.php");
require_once("../conexion.php");

$smarty=new Smarty; 

//es para mostrar que esta conectado
if(isset($_SESSION["sesion_id_usuario"])){
	$sesion=array ("id_usuario"=>$_SESSION["sesion_id_usuario"],
					"usuario"=>$_SESSION["sesion_usuario"],
					"id_rol"=>$_SESSION["sesion_id_rol"],
					"rol"=>$_SESSION["sesion_rol"],
				);
	$login="NO";

}else{
	$sesion=array("id_usuario"=>"----",
					"usuario"=>"----",
					"id_rol"=>"----",
					"rol"=>"---",
				);
	$login="SI";

}
/*Autogestionar el nombre de agencia y el logo*/
	$sql1=$db->Prepare("SELECT *
						FROM SuperMercado
						WHERE id_superMercado= 1
						AND estado <> '0'
						");
	$rs1=$db->GetAll($sql1);
	$nombre= $rs1[0]["nombre"];
	$Logo=$rs1[0]["Logo"];
	$smarty->assign("nombre",$nombre);
	$smarty->assign("Logo", $Logo);

$smarty->assign("sesion",$sesion);
$smarty->assign("login",$login);
$smarty->assign("direc_css",$direc_css);
$smarty->display("menu_sup.tpl");
?>