{include file="header.tpl"}
{include file="nav.tpl"}

<h2>Crear</h2>

 <div class="container">
      <h2>Crear personaje</h2>
      <form method="post" action="agregarPersonaje">
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
        <p>{$Message}</p>
        <button type="submit" class="btn btn-primary">Crear Personaje</button>
      </form>
    </div>

     <div class="container">
      <h2>Crear hecho</h2>
      <form method="post" action="agregarHecho">
        <div class="form-group">
          <select name="persoHechoForm" id="persoHechoForm">
            <option value=""></option>
            {foreach from=$Personajes item=perso}
              <option value="{$perso['id_personaje']}">{$perso['nombre']}</option>
            {/foreach}
          </select>
        </div>
        <div class="form-group">
          <label for="hechoForm">Hecho a agregar</label>
          <textarea name="hechoForm" id="hechoForm" cols="50" rows="10"></textarea>
        </div>
        <p>{$MessageHecho}</p>
        <button type="submit" class="btn btn-primary">Agregar Hecho</button>
      </form>
    </div>


{include file="footer.tpl"}
