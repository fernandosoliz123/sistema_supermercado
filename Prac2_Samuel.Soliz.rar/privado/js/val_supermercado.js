"use strict"
function validar(){
	var nombreSuper=document.form5.nombreSuper.value;
	var correoSuper=document.form5.correoSuper.value;

	if ((!v1.test(nombreSuper))||(nombreSuper=="")) {
		alert(" los nombres son incorrectos o estan vacios");
		document.form5.nombreSuper.focus();
		return; 
	}
	if(!v3.test(correoSuper)){
		alert("el correo es incorrecto o esta vacio");
		document.form5.correoSuper.focus();
		return;	
	}
	alert("DATOS CORRECTOS");
	document.form5.focus();

}