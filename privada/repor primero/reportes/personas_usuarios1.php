<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php"); 
require_once("../../conexion.php");

$smarty = new Smarty;

//$db->debug-true;

$sql = $db->Prepare("SELECT*
	                 FROM personas p, usuarios u
	                 WHERE p.id_persona u.id_persona
	                 AND p.estado <> 'X'
	                 AND u.estado <> 'X' 
	                 ORDER BY (u.id_persona) DESC
	                 ");
 $rs = $db->GetAll($sql); 

$sql1 = $db->Prepare("SELECT *
	                  FROM agencia_empleos 
	                  WHERE id_agencia_empleo = 1
	                  AND _estado <>'X'

");
$rs1= $db->GetAll($sql1);  
$nombre = $rs1[0]["nombre"]; 
$logo_agencia = $rs1[0]["logo_agencia"];

$fecha= date("Y-m-d H:i:s");

$smarty->assign("personas_usuarios", $rs); 
$smarty->assign("logo_agencia", $logo_agencia);
$smarty->assign("fecha", $fecha);
$smarty->assign("direc_css", $direc_css); 
$smarty->display("personas_usuarios1.tpl");
?>