<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

//$direc_css ="../css/colores.css";
$smarty= new  Smarty;
/*$db->debug=true;

$sql = $db->Prepare("SELECT *
	                   FROM cargo ca, empleados em
	                   WHERE em.id_cargo = ca.id_cargo
	                   AND em.estado <> '0'
	                   AND ca.estado <> '0'
	                   ORDER BY (em.id_cargo) DESC	                  
	                   ");*/


 $sql = $db->Prepare("SELECT* 
  FROM vista_cargo_empleado");




$rs=$db->GetAll($sql);

$smarty->assign("cargo_empleados",$rs);
$smarty->assign("direc_css",$direc_css);
$smarty->display("cargo_empleados.tpl");
?>