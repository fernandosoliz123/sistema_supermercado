<?php
 session_start(); 
 require_once ("../../smarty/libs/Smarty.class.php"); 
 require_once ("../../conexion.php" ); 

 $receta = $_REQUEST["receta"];

 $smarty = new Smarty ; 

 //$db->debug = true ; 
 if ($receta == "T"){

     $sql = $db->Prepare("SELECT * 
          FROM ingredientes i, recetas r
          WHERE i.id_receta = r.id_receta
         
          ");

    $rs = $db->GetAll($sql); 

 }else{

$sql = $db->Prepare("SELECT *
          FROM ingredientes i, recetas r
          WHERE i.id_receta = r.id_receta
          AND receta = ?
     
          ");


     $rs = $db->GetAll($sql,array($receta)); 
}

 	 $sql1 = $db->Prepare("SELECT *
                           FROM SuperMercado
                           WHERE id_superMercado = 1
                           AND estado <> '0'
 	 					");

 	 $rs1 = $db->GetAll($sql1);
 	 $nombre = $rs1[0]["nombre"];
 	 $Logo = $rs1[0]["Logo"];

 	 $fecha= date("Y-m-d H:i:s");

 	 $smarty->assign("ingredientes_receta1" ,$rs); 
 	 $smarty->assign("Logo" ,$Logo);
 	 $smarty->assign("fecha" ,$fecha);
 	 $smarty->assign("direc_css" , $direc_css); 
 	 $smarty->display("rpt_ingredientes_receta1.tpl");
?>