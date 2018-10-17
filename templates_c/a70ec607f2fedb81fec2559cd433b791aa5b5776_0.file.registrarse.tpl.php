<?php
/* Smarty version 3.1.33, created on 2018-10-14 12:40:54
  from 'I:\Xampp\htdocs\pn\templates\registrarse.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc31d3637d178_31497465',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a70ec607f2fedb81fec2559cd433b791aa5b5776' => 
    array (
      0 => 'I:\\Xampp\\htdocs\\pn\\templates\\registrarse.tpl',
      1 => 1539352611,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bc31d3637d178_31497465 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1>Registrarse</h1>

<form method="post" action="agregarUsuario">


	<label for="email">Correo electrónico</label>
	<input type="email" name="email" id="email">

	<label for="pass">Contraseña</label>
	<input type="password" name="pass" id="pass">


  <button type="submit">Registrarse</button>
</form>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
