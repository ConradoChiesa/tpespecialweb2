<?php
/* Smarty version 3.1.33, created on 2018-10-16 15:00:44
  from 'I:\Xampp\htdocs\Dropbox\pn\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc5e0fc6a3407_44650161',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '574c8b95cc8d68ca7fb0a45bf331236f6b9bad0e' => 
    array (
      0 => 'I:\\Xampp\\htdocs\\Dropbox\\pn\\templates\\home.tpl',
      1 => 1539694808,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bc5e0fc6a3407_44650161 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<nav>
  <button>Inicio</button>
  <form method="post" action="registrarse">
    <button type="submit">Registrarse</button>
  </form>

  <p></p>

  <form method="post" action="logearse">
    <button type="submit">Login</button>
  </form>
</nav>


 <form method="post" action="personajes">
    <button type="submit">Ir a personajes</button>
  </form>

  <form method="post" action="crear">
    <button type="submit">Crear</button>
  </form>

  <form method="post" action="logout">
     <button type="submit">Cerrar sesión</button>
   </form>











<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
