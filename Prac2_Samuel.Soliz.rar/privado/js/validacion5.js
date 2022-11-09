"use strict"
function validar (){
	var nombre = document.form5.nombre.value;
	var ap_paterno = document.form5.ap_paterno.value;
	var ap_materno=document.form5.ap_materno.value;
	var ci = document.form5.ci.value;
	var direccion = document.form5.direccion.value;

	if((!v1.test(nombre))|| (nombre=="")){
		alert("el nombre es incorrecto o esta vacio");
		document.form5.nombre.focus();
		return;
	}
	if((!v1.test(ap_paterno))|| (ap_paterno=="")){
		alert("el apellido paterno es incorrecto o esta vacio");
		document.form5.ap_paterno.focus();
		return;
	}
	if((!v1.test(ap_materno))|| (ap_materno=="")){
		alert("el apellido materno es incorrecto o esta vacio");
		document.form5.ap_materno.focus();
		return;
	}
	if ((!v2.test(ci))||(ci=="")){
		alert("la cedula de identidad esta vacia o incorrecta");
		document.form5.ci.focus();
		return;
	}
	if (direccion==""){
		alert("La direccion esta vacia");
		document.form5.direccion.focus();
		return;
	}
   document.form5.focus()
   alert("DATOS CORRECTOS");
	document.form5.focus();



}