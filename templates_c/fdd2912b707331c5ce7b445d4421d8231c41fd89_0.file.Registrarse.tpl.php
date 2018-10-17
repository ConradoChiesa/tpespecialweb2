<?php
/* Smarty version 3.1.33, created on 2018-10-09 21:43:30
  from 'I:\Xampp\htdocs\pn\templates\Registrarse.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bbd04e2068ca5_67154741',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fdd2912b707331c5ce7b445d4421d8231c41fd89' => 
    array (
      0 => 'I:\\Xampp\\htdocs\\pn\\templates\\Registrarse.tpl',
      1 => 1539113092,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bbd04e2068ca5_67154741 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1>Registrarse</h1>

<form method="post" action="registrarse">
  <button type="submit">Registrarse</button>
</form>

<p></p>

<form method="post" action="logearse">
  <button type="submit">Login</button>
</form>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
