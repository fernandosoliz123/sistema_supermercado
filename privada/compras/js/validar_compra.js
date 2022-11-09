"use strict"
function validar(){
  var fecha = document.formu.fecha.value;
  var monto_final = document.formu.monto_final.value;
 


  if (fecha==""){
    alert("Por favor ingrese la Fecha");
    document.formu.fecha.focus();
    return;
  }
/*
  if (monto_final==""){
    alert("Por favor ingrese en monto final");
    document.formu.monto_final.focus();
    return;
 */
  if (!v1.test(monto_final)){
    alert("El monto final es incorrecto");
    document.formu.monto_final.focus();
    return;
  }
  
  document.formu.submit();
}
