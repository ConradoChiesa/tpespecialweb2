{include file="header.tpl"}
{include file="nav.tpl"}

  <h1>Lista de personajes</h1>

{foreach from=$Personajes item=perso}
  <h5> {$perso['nombre']} </h5>
  <p>Nació en: {$perso['nacimiento']} </p>
  <p>Actividad: {$perso['actividad']} </p>
  <form action="hechosDelPersonaje" method="post">
	   <input type="hidden" name="idPersonaje" id="idPersonaje" value="{$perso['id_personaje']}">
	   <button class="btn-perso" type="submit">Ver hechos del personaje</button>
  </form>
  <p></p>
{/foreach}


















{include file="footer.tpl"}
