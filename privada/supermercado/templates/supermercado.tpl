<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../{$direc_css}"type="text/css">
	<script type="text/javascript" src="../js/expresiones_regulares.js"></script>
	<script type="text/javascript" src="js/validar_supermercado.js"></script>
</head>
<body>
	<br>
          <center>
          	<h1> SUPERMERCADO </h1>
          	<form action="supermercado1.php" method="post" name="formu" enctype="multipart/form-data">
          		<table border="1">
            {foreach item=r from=$SuperMercado}
            	<tr>
            			<th>Nombre (*)</th><th>:</th>
            			<td> <input type="text" name="nombre" onkeyup="this.value=this.value.toUpperCase()" value="{$r.nombre}">  </td>>
            		</tr>

            		<tr>
            			<th align="right">Email</th><th>:</th>
            			<td><input type="text" name="Email" onkeyup="this.value=this.value.toUpperCase()" value="{$r.Email}">  </td>>
            		</tr>
            		<tr>
            			<th>Logo(*)</th><th>:</th>
            			<td>

            				<input type="hidden" name="MAX_FILE_SIZE" value="1000000">
            				<input type="file" name="Logo">
            				<input type="hidden" name="logo_superMercado1" value="{$r.Logo}">
            				<br><b>{$r.Logo}</b>
            			</td>
            		</tr>

            		<tr>
            			<td align="center" colspan="3">
            				<input type="hidden" name="accion" value="=">
            				<input type="hidden" name="id_superMercado" value="{$r.id_superMercado}">
            			    <input type="button" value="Aceptar" onclick="validar();">
            			</td>>
            		</tr>>
            		{/foreach}
            	</table>
            	<table>
            		<tr>
            			<td colspan="3" align="center"><b>(*)Campos Obligatorios</b></td>
            		</tr>>
            	</table>
            </form>
        </center>
       </body>
      </html>




