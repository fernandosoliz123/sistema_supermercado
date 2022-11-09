<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
/*require_once("../libreria_menu.php");*/

/*datos de variables*/
$id_cargo=$_REQUEST["id_cargo"];
$id_empleado=$_REQUEST["id_empleado"];
$Fecha_inicio=$_POST["Fecha_inicio"];
$Fecha_fin=$_POST["Fecha_fin"];
$Nombre=$_POST["Nombre"];
$Apellido_Paterno=$_POST["Apellido_Paterno"];
$Apellido_Materno=$_POST["Apellido_Materno"];
$Direccion=$_POST["Direccion"];
$telefono=$_POST["telefono"];


/*almacenamiento de datos*/
$smarty=new Smarty;
$reg=array();
$reg["id_cargo"]=$id_cargo;
$reg["Fecha_inicio"]=$Fecha_inicio;
$reg["Fecha_fin"]=$Fecha_fin;
$reg["Nomnbre"]=$Nombre;
$reg["Apellido_Paterno"]=$Apellido_Paterno;
$reg["Apellido_Materno"]=$Apellido_Materno;
$reg["Direccion"]=$Direccion;
$reg["telefono"]=$telefono;

$reg["empleados"]=$_SESION["session_id_empleado"];

$rs1=$db->AutoExecute("empleados",$reg,"UPDATE","id_empleado='".$id_empleado."'");

if($rs1){
	header("Location:epleados.php");
	exit();
}else{
	$smarty->assign("mensaje","ERROR:Los datos no se modificaron!!!!!!!");
	$smarty->assign("direc_css",$direc_css);
	$smarty->assign("id_empleado",$id_empleado);
	$smarty->display("empleado_modificar1.tpl");


}
?>
