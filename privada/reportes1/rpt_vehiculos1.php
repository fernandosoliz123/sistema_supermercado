<?php
 session_start(); 
 require_once ("../../smarty/libs/Smarty.class.php"); 
 require_once ("../../conexion.php" ); 

 $nombre = $_REQUEST["nombre"];

 $smarty = new Smarty ; 

 $db->debug = true ; 

 if ($nombre == "T"){

     $sql = $db->Prepare("SELECT * 
          FROM  clientes1 c,vehiculos v
          WHERE v.id_cliente = c.id_cliente
          ORDER BY (v.id_cliente) DESC
          ");

    $rs = $db->GetAll($sql); 

 }else{

$sql = $db->Prepare("SELECT *
          FROM  clientes1 c,vehiculos v
          WHERE v.id_cliente = c.id_cliente
          AND c.nombre=?
          ORDER BY (v.id_cliente) DESC
          ");


     $rs = $db->GetAll($sql,array($nombre)); 
}

 	 $sql1 = $db->Prepare("SELECT *
 	 					FROM SuperMercado
 	 					WHERE id_superMercado = 1
 	 					
 	 					");

 	 $rs1 = $db->GetAll($sql1);
 	 $nombre = $rs1[0]["nombre"];
 	 $Logo = $rs1[0]["Logo"];

 	 $fecha= date("Y-m-d H:i:s");

 	 $smarty->assign("vehiculos" ,$rs); 
 	 $smarty->assign("Logo" ,$Logo);
 	 $smarty->assign("fecha" ,$fecha);
 	 $smarty->assign("direc_css" , $direc_css); 
 	 $smarty->display("rpt_vehiculos1.tpl");
?>