<?php
/* Smarty version 3.1.33, created on 2018-10-15 22:04:58
  from 'I:\Xampp\htdocs\Dropbox\pn\templates\registrarse.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc4f2eacfc991_03233409',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75a8c45f0ea8d19a126a36add0f96561d074f4b3' => 
    array (
      0 => 'I:\\Xampp\\htdocs\\Dropbox\\pn\\templates\\registrarse.tpl',
      1 => 1539633888,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bc4f2eacfc991_03233409 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1>Registrarse</h1>

<form method="post" action="agregarUsuario">


	<label for="email">Correo electrónico</label>
	<input type="email" name="email" id="email">

	<label for="pass">Contraseña</label>
	<input type="password" name="pass" id="pass">

	<label for="passcheq">Repetir contraseña</label>
	<input type="password" name="passcheq" id="passcheq">

  <button type="submit">Registrarse</button>
</form>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}