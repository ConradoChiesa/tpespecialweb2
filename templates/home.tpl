{include file="header.tpl"}

  <h2>Lista de personajes</h2>
    <div class="container">
      <ul class="list-group">
            {foreach from=$Personajes item=perso}
              <li class="list-group-item">{$perso['nombre']} Actividad: {$perso['actividad']} Nacimiento: {$perso['nacimiento']}</li>
            {/foreach}
      </ul>
    </div>

  <h2>Lista de hechos</h4>
    <div class="container">
      <ul class="list-group">
        {foreach from=$Hechos item=hecho}
          <li class="list-group-item">{$hecho['hecho']} {$hecho['id_personaje']}</li>
        {/foreach}
      </ul>
    </div>

     <div class="container">
      <h3>Crear personaje</h3>
      <form method="post" action="agregar">
        <div class="form-group">
          <label for="nombreForm">Nombre</label>
          <input type="text" class="form-control" id="nombreForm" name="nombreForm">
        </div>
        <div class="form-group">
          <label for="nacimientoForm">Nacimiento</label>
          <input type="text" class="form-control" id="nacimientoForm" name="nacimientoForm">
        </div>
         <div class="form-group">
          <label for="actividadForm">Actividad</label>
          <input type="text" class="form-control" id="actividadForm" name="actividadForm">
        </div>
        </div>
        <button type="submit" class="btn btn-primary">Crear Personaje</button>
      </form>
    </div>
  
     <div class="container">
      <h2>Crear hecho</h2>
      <form method="post" action="agregarHecho">
        <div class="form-group">
          <label for="hechoForm">Hecho a agregar</label>
          <textarea name="hechoForm" id="hechoForm" cols="50" rows="10"></textarea>
        </div>
        <div class="form-group">
          <select name="persoHechoForm" id="persoHechoForm">
            <option value=""></option>
            {foreach from=$Personajes item=perso}
              <option value="{$perso['id_personaje']}">{$perso['nombre']}</option>
            {/foreach}
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Agregar Hecho</button>
      </form>
    </div>





    
{include file="footer.tpl"}
