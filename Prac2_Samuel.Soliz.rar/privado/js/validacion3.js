"use strict"
function validar(){
	var cantidad=document.form5.cantidad.value;

    if (!v2.test(cantidad)||(cantidad=="")) {
		alert(" La cantidad esta vacia o esta incorrecta");
		document.form5.cantidad.focus();
		return; 
	}
	document.form5.submit();
	alert("DATOS CORRECTOS");
	document.form5.cantidad.focus();




}