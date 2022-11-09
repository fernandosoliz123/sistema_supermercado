"use strict"
function validar (){
	var nombre = document.form5.nombre.value;
	

	if((!v1.test(nombre))|| (nombre=="")){
		alert("el nombre es incorrecto o esta vacio");
		document.form5.nombre.focus();
		return;
	}
	
document.formu.submit();

}
function reset(){
	var nombreSuper=null;
	var correoSuper=null;
}