{include file="header.tpl"}
{include file="nav.tpl"}

    <h2>Logearse</h2>

    <form class="centrado" method="post" action="verificarLogin">
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <label for="pass">Clave</label>
        <input type="password" name="pass" id="pass">
        <p>{$Message}</p>
      <button type="submit">Login</button>
    </form>

{include file="footer.tpl"}
