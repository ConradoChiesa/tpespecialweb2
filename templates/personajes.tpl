{include file="header.tpl"}
{include file="nav.tpl"}

  <h2 class="listaPersonajes">Lista completa de personajes</h2>

{foreach from=$Personajes item=perso}
  <div class="conteListaPerso">
  	<h4> {$perso['nombre']} </h4>
  	<p>Nació en: {$perso['nacimiento']} </p>
  	<p>Actividad: {$perso['actividad']} </p>
  	<form action="hechosDelPersonaje" method="post">
	   <input type="hidden" name="idPersonaje" id="idPersonaje" value="{$perso['id_personaje']}">
	   <button class="btn-perso" type="submit">Ver hechos del personaje</button>
  	</form>	
  </div>
  
  <p></p>
{/foreach}


















{include file="footer.tpl"}
