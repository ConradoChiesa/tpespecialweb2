{include file="header.tpl"}
{include file="nav.tpl"}

<h2>Registrarse</h2>

<form method="post" action="agregarUsuario">


	<label for="email">Correo electrónico</label>
	<input type="email" name="email" id="email">

	<label for="pass">Contraseña</label>
	<input type="password" name="pass" id="pass">

	<label for="passcheq">Repetir contraseña</label>
	<input type="password" name="passcheq" id="passcheq">

  <button type="submit">Registrarse</button>
</form>


{include file="footer.tpl"}
