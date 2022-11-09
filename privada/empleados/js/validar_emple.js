"use strict"
function validar(){
var Fecha_inicio= document.formu.Fecha_inicio.value;
var Fecha_fin= document.formu.Fecha_fin.value;
var Nombre = document.formu.Nombre.value; 
var Apellido_Paterno = document.formu.Apellido_Paterno.value;
var Apellido_Materno = document.formu.Apellido_MN aterno.value;
var Direccion = document.formu.Direccion.value;
var telefono = document.formu.telefono.value;

if (ci== "") { 
	alert("Por favor ingrese el numero de ci"); 
	document.formu.ci.focus();
	return;

}

if (!v1.test(nombres)) {
	alert("Los nombres son incorrectos o el campo esta vacio"); 
	document.formu.nombres.focus();
	return;
}

if ((ap=="") && (am=="")) { 
	alert("Por favor introduzca un Apellido"); 
	document.formu.ap.focus(); 
	return;
} 

document.formu.submit();
}