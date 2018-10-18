{include file="header.tpl"}
{include file="nav.tpl"}

<form method="post" action="crear">
  <button type="submit" class="crearPersoHechos">Crear personajes o hechos</button>
</form>

  <div class="centrado">
    <h2>Editar personajes</h2>
    <div class="container">
      <ul class="list-group">
            {foreach from=$Personajes item=elem}
              <li class="list-group-item">{$elem['nombre']}  {$elem['actividad']}  {$elem['nacimiento']}
                <a href="editarPersonaje/{$elem['id_personaje']}">Editar</a>
                <a href="borrarPersonaje/{$elem['id_personaje']}">Borrar</a> </li>
            {/foreach}
      </ul>
    </div>

  <h2>Editar hechos</h2>
    <div class="container">
      <ul class="list-group">
        {foreach from=$Hechos item=elem}
          <li class="list-group-item"> {$elem['hecho']} {$elem['nombre']}
            <a href="editarHecho/{$elem['id_hecho']}">Editar</a>
            <a href="borrarHecho/{$elem['id_hecho']}">Borrar</a>
            </li>
        {/foreach}
      </ul>
    </div>  
  </div>
  

{include file="footer.tpl"}
