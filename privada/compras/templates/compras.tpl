<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css" >
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
</head>
<body>
	<div class="titulo_listado">
		<h1>
			COMPRAS
		</h1>
	</div>
	<div class="titulo_nuevo">
		<form name="formNuevo" method="post" action="compra_nuevo.php">
			<a href="javascript:document.formNuevo.submit();">
				Nuevo>>>
			</a>
		</form>
	</div>
	<center>
		<table class="listado">
			<tr>
				<th>NRO</th><th>FECHA</th><th>MONTO FINAL</th> 
				<th><img src="../../imagenes/modificar.png"></th><th><img src="../../imagenes/borrar.png"></th>
			</tr>
			{assign var="b" value="0"}
			{assign var="total" value="`$pagina-1`"}
			{assign var="a" value="`$numreg*$total`"}
			{assign var="b" value="`$b+1+$a`"}
			{foreach item=r from=$compras}
			<tr>
				<td align="center">{$b}</td>
				<td>{$r.fecha}</td>
				<td>{$r.monto_final}</td>
				<td align="center">
					<form name="formModif{$r.id_compra}" method="post" action="compra_modificar.php">
						<input type="hidden" name="id_compra" value="{$r.id_compra}">
						<a href="javascript:document.formModif{$r.id_compra}.submit();" title="Modificar Compra Sistema">
							Modificar>>
						</a>
					</form>
				</td>
				<td align="center">
					<form name="formElimi{$r.id_compra}" method="post" action="compra_eliminar.php">
						<input type="hidden" name="id_compra" value="{$r.id_compra}">
						<a href="javascript:document.formElimi{$r.id_compra}.submit();" title="Eliminar Compra Sistema" onclick="javascript:return(confirm('Desea realmente Eliminar a compra {$r.fecha} {$r.monto_final} ')); location.href='compra_eliminar.php'">
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
