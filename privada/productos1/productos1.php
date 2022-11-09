<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");



$smarty = new Smarty;

//$db->debug=true;


     $sql = $db->Prepare("SELECT * 
          FROM productos1 p, proveedores1 r
          GROUP BY (r.nombre) DESC
          ");

    $rs = $db->GetAll($sql); 


$smarty->assign("productos",$rs);
$smarty->assign("direc_css",$direc_css);
$smarty->display("productos1.tpl");
?>