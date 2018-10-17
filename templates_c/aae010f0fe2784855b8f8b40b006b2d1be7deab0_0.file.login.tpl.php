<?php
/* Smarty version 3.1.33, created on 2018-10-10 03:38:13
  from 'I:\Xampp\htdocs\pn\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bbd58057e1299_71417324',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aae010f0fe2784855b8f8b40b006b2d1be7deab0' => 
    array (
      0 => 'I:\\Xampp\\htdocs\\pn\\templates\\login.tpl',
      1 => 1539134438,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bbd58057e1299_71417324 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <h1>Logearse</h1>
    <form method="post" action="verificarLogin">
      
        <label for="email">Email</label>
        <input type="email" name="email" id="email">

        <label for="clave">Clave</label>
        <input type="password" name="clave" id="clave">

      <button type="submit">Login</button>
    </form>
    </div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
