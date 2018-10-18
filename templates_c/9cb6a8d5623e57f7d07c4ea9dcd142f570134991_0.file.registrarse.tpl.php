<?php
/* Smarty version 3.1.33, created on 2018-10-18 02:53:23
  from 'I:\Xampp\htdocs\p\templates\registrarse.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc7d98396a0c4_23977966',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9cb6a8d5623e57f7d07c4ea9dcd142f570134991' => 
    array (
      0 => 'I:\\Xampp\\htdocs\\p\\templates\\registrarse.tpl',
      1 => 1539793716,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:nav.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bc7d98396a0c4_23977966 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
