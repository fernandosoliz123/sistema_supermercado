<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css" >
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
</head>
<body>
	<div class="titulo_listado">
		<h1>
			EMPLEADOS
		</h1>
	</div>
	<div class="titulo_nuevo">
		<form name="formNuevo" method="post" action="empleado_nuevo.php">
			<a href="javascript:document.formNuevo.submit();">
				Nuevo>>>
			</a>
		</form>
	</div>
	<center>
		<table class="listado">
			<tr>
			 
				<th>NRO</th><th>Fecha_inicio</th><th>Fecha_fin</th><th>Apellido_Paterno</th><th>Apellido_Materno</th><th>Direccion</th><th>telefono</th>
				<th><img src="../../imagenes/modificar.png"></th><th><img src="../../imagenes/borrar.png"></th>
			</tr>
			{assign var="b" value="0"}
			{assign var="total" value="`$pagina-1`"}
			{assign var="a" value="`$numreg*$total`"}
			{assign var="b" value="`$b+1+$a`"}
			{foreach item=r from=$empleados}
			<tr>
				<td align="center">{$b}</td>
				<td>{$r.Fecha_inicio}</td>
				<td align="center">{$r.Fecha_fin}</td>
				<td>{$r.Apellido_Paterno}</td>
				<td>{$r.Apellido_Materno}</td>
				<td>{$r.Direccion}</td>
				<td>{$r.telefono}</td>
				<td align="center">
					<form name="formModif{$r.id_empleado}" method="post" action="empleado_modificar.php">
						<input type="hidden" name="id_empleado" value="{$r.id_empleado}">
						<a href="javascript:document.formModif{$r.id_empleado}.submit();" title="Modificar Empleado Sistema">
							Modificar>>
						</a>
					</form>
				</td>
				<td align="center">
					<form name="formElimi{$r.id_empleado}" method="post" action="empleado_eliminar.php">
						<input type="hidden" name="id_empleado" value="{$r.id_empleado}">
						<a href="javascript:document.formElimi{$r.id_empleado}.submit();" title="Eliminar Empleado Sistema" onclick="javascript:return(confirm('Desea realmente Eliminar a el empleado..?')); location.href='empleado_eliminar.php'">
							Eliminar>>
						</a>
					</form>
				</td>
				{assign var="b" value="`$b+1`"}
				{/foreach}
			</tr>
		</table>

		<!--PAGINACION------------------------->
		<table>
			<tr align="center">
				<td>
					{if !empty($urlback)}
					<a onclick="location.href='{$urlback}'" style="font-family: Verdana;font-size: 9px;cursor:pointer";>&laquo;Anterior</a>
				{/if}
				{if !empty($paginas)}
					{foreach from=$paginas item=pag}
					{if $pag.npag == $pagina}
						{if $pagina neq '1'}|{/if}<b style="color:#FB992F;font-size: 12px; ">{$pag.npag}</b>
					{else}
					| <a onclick="location.href = '{$pag.pagV}'" style="cursor: pointer;">{$pag.npag}</a>
					{/if}
					{/foreach}
					{/if}
					{if $numpaginas gt $numbotones and !empty($urlnext) and $pagina lt $numpaginas}
					| <a onclick="location.href='{$urlnext}'" style="font-family: Verdana; font-size: 9px; cursor: pointer">Siguinte&raquo;</a>
					{/if}
				</td>
			</tr>
		</table>
	</center>
</body>
</html>





 