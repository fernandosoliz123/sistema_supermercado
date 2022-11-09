"use strict"
function validar(){

var Nombre = document.formu.Nombre.value; 
var apellido_paterno = document.formu.apellido_paterno.value;
var apellido_materno = document.formu.apellido_materno.value;
var ci = document.formu.ci.value;
var direccion = document.formu.direccion.value;
var f = document.formu.genero[0].checked;
var m = document.formu.genero[1].checked;



if (!v1.test(Nombre)) {
	alert("Los nombres son incorrectos o el campo esta vacio"); 
	document.formu.Nombre.focus();
	return;
}

if ((apellido_paterno=="") && (apellido_materno=="")) { 
	alert("Por favor introduzca un Apellido"); 
	document.formu.ap.focus(); 
	return;
} 
if (ci== "") {
	alert("Por favor ingrese el numero de ci"); 
	document.formu.ci.focus();
	return;

}
if (direccion== "") {
	alert("Por favor ingrese el numero de direccion"); 
	document.formu.direccion.focus();
	return;

}
if ((f == "") && (m == "")) { 
	alert("El campo de genero esta vacio"); 
	document.formu.m.focus();
	return;
} 
document.formu.submit();
}