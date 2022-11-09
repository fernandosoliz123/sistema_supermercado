<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
              var ventanaCalendario = false
              function imprimir() {
                   if(confirm(' Desea Imprimir ?')){
               window.print();
            } 
 }
 
</script>
</head>
<body style='cursor:pointer;cursor:hand' onclick='imprimir();'>

<table width="100%" border="0">
 <tr>
        <td><img src="../../img/{$logo}" width="70%" alt=""></td>
        <td aling="center"  width="80%"  ><h1>PERSONAS USUARIOS</h1> </td>
 </tr>
</table>
 <br>
 <center>
  <table border="1" cellpadding="0">
   <tr>
   <th>NRO</th><th>PERSONA</th><th>USUARIO</th>
   </tr>
   {assign var='b' value='1'}
   {foreach item=r from=$personas_usuarios}
   <tr>
    <td aling="center">{$b}</td>
    <td>{$r.ci}{$r.nombres}{$r.ap}{$r.am}</td>
    <td><i>{$r.usuario}</i></td>
    {assign var='b' value="`$b+1`"}
    {/foreach}
   </tr>
  </table>
  <br>
  <br>
  <b>Fecha:</b>{$fecha}
 </center>
</body>
</html>