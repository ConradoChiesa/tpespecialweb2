{include file="header.tpl"}
{include file="nav.tpl"}

<h2>Editar personaje: </h2>

<img src="images/agente02.jpg" alt="El Superagente y su Zapatófono" class="zapatofono">

<p></p>

  <form method="post" action="{$home}/modificarPerso">
    <label for="nombrePerso">Nombre: </label>
    <input type="text" id="nomPerso" name="nomPerso" placeholder="{$Perso['nombre']}">

    <label for="naciPerso">Nacimiento: </label>
    <input type="text" id="naciPerso" name="naciPerso" placeholder="{$Perso['nacimiento']}">

    <label for="actiPerso">Actividad: </label>
    <input type="text" id="actiPerso" name="actiPerso" placeholder="{$Perso['actividad']}">

    <input type="hidden" id="id_personaje" name="id_personaje" value="{$Perso['id_personaje']}">
    <button type="submit" class="btn btn-primary">Modificar personaje</button>
  </form>


{include file="footer.tpl"}
