"use strict"
function validar(){
   var Fecha_inicio= document.formu.Fecha_inicio.value;
   var Fecha_fin= document.formu.Fecha_fin.value;
   var Nombre = document.formu.Nombre.value; 
   var Apellido_Paterno = document.formu.Apellido_Paterno.value;
   var Apellido_Materno = document.formu.Apellido_MN aterno.value;
   var Direccion = document.formu.Direccion.value;
   var telefono = document.formu.telefono.value;
	
	/*para validar como dato obligatorio y dato correcto (letras y espacios en blanco)*/
	if(!v1.test(Fecha_inicio)){
		alert("La fecha inicio es incorrecto o estan vacio");
		document.formu.Fecha_inicio.focus();
		return;
	}
	if(Fecha_fin==""){
		alert(" la fecha fin esta en blanco");
		document.formu.Fecha_fin.focus();
		return;
		}
	if(Nombre!=""){
		if(!v2.test(Nombre)){
		alert(" El nombre esta en blanco");
		document.formu.Nombre.focus();
		return;
		}
	}
	if(Apellido_Paterno!=""){
		if(!v2.test(num_ejemplar)){
		alert(" El apellido  esta vacio");
		document.formu.Apellido_Paterno.focus();
		return;
		}
	}
	if(Apellido_Materno==""){
		
		alert(" El apellido esta vacio");
		document.formu.Apellido_Materno.focus();
		return;
		
	}
	if(Direccion!=""){
		if(!v2.test(num_ejemplar)){
		alert("La direccion esta vacio");
		document.formu.Direccion.focus();
		return;
		}
	}
	if(telefono==""){
		
		alert(" El numero de telefono esta vacio");
		document.formu.telefono.focus();
		return;
		
	}
	/*no es necesario que sea obligatorio modificado esta parte
	if(observacion==""){
		alert(" la observacion esta en blanco");
		document.formu.observacion.focus();
		return;
		}
	alert("DATOS CORRECTOS\n"+"Titulo: "+titulo+"\n"+"Ubicación:"+ubicacion+"\n"+"Nº inventario:"+num_inventario);*/
	document.formu.submit();
}
