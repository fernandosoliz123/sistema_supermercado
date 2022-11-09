"use strict"
function validar(){
	var fecha=document.form5.fecha.value;
	var monto_final=document.form5.monto_final.value;

	if (fecha=="") {
		alert("La fecha esta vacia");
		document.form5.fecha.focus();
		return; 
	}

	if((!v22.test(monto_final))||(monto_final=="")){
		alert("el monto es incorrecta o esta vacia");
		document.form5.monto_final.focus();
		return;

	}
	alert("DATOS CORRECTOS");
	document.form5.submit();

}