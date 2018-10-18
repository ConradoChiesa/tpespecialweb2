{include file="header.tpl"}
{include file="nav.tpl"}

<h2>Hechos de Personaje</h2>

<h4 class="conteListaPerso">{$Personaje['nombre']}</h4>

{foreach from=$HechosDePersonaje item=elem}
	<div>
		<p>{$elem['hecho']}</p>
	</div>
{/foreach}


{include file="footer.tpl"}
