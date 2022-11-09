<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
$smarty =new Smarty();
$sql= $db->Prepare("SELECT *
	                   FROM cargo ca, empleados em
	                   WHERE em.id_cargo = ca.id_cargo
	                   AND em.estado <> '0'
	                   AND ca.estado <> '0'
	                   ORDER BY (em.id_cargo) DESC	                  
	                   ");
$rs=$db->GetAll($sql);
$sql1=$db->Prepare("SELECT * 
	                   FROM supermercado
	                   WHERE id_superMercado =1 
	                   AND estado <> '0' 
	               
	                   ");
$rs1=$db->GetAll($sql1);
$Nombre=$rs1[0]["nombre"];

$Logo=$rs1[0]["Logo"];

$fecha =date("Y-m-d H:i:s" );

$smarty->assign("cargo_empleados",$rs);
$smarty->assign("Logo",$Logo);
$smarty->assign("fecha",$fecha);
$smarty->assign("direc_css",$direc_css);
$smarty->display("cargo_empleados1.tpl");
