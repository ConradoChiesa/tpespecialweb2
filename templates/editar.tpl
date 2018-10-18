{include file="header.tpl"}
{include file="nav.tpl"}
    <h2>Editar</h2>

    <div class="container">
      
      <form method="post" action="{$home}/modificarHecho">
       
        <div class="form-group">
          <label for="hechoForm">Reescribir el hecho: </label>
          <textarea name="hechoForm" id="hechoForm" cols="70" rows="3" placeholder="{$Hecho}"></textarea>
        </div>

        <input type="hidden" id="idHecho" name="idHecho" value="{$Id_hecho}">

        <button type="submit" class="btn btn-primary">Editar</button>
      </form>
    </div>   
     

{include file="footer.tpl"}





