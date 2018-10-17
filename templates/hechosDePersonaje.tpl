{include file="header.tpl"}
{include file="nav.tpl"}

<h2>Hechos de Personaje</h2>

<h3 class="persoNombre">{$Personaje['nombre']}</h3>

{foreach from=$HechosDePersonaje item=elem}

	<p>{$elem['hecho']}</p>

{/foreach}





{include file="footer.tpl"}
