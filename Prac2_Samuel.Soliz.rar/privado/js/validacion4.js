"use strict"
function validar(){
	var nombre=document.form5.nombre.value;
	var cantidad=document.form5.cantidad.value;

	if (!v1.test(nombre)) {
		alert("El nombre es incorrecto o esta vacio");
		document.form5.nombre.focus();
		return; 
	}
	if((!v2.test(cantidad))||(cantidad=="")){
		alert("la cantidad es incorrecta o esta vacia");
		document.form5.cantidad.focus();
		return;

	}
document.form5.submit();

}