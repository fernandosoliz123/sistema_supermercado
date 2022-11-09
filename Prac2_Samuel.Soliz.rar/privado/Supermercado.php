
<?php
$nombre_Super=$_POST["nombre_Super"];
$correo_Super=$_POST["correo_Super"];
$formulario=$_POST["formulario"];
$target_path = "uploads/";
$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 

 echo"<BR> Los valores introducidos de $formulario  son: </br>
 		
        NOMBRE:$nombre_Super<br>
        CORREO:$Correo_Super<br>
        if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
    echo "El archivo ".  basename( $_FILES['uploadedfile']['name']). 
    " ha sido subido";
} else{
    echo "Ha ocurrido un error, trate de nuevo!";
}
 
 		 
 		";
?> 