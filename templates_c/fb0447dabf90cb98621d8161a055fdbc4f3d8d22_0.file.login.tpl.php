<?php
/* Smarty version 3.1.33, created on 2018-10-17 18:28:42
  from 'F:\xampp\htdocs\p\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc7633a1bf057_81336082',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb0447dabf90cb98621d8161a055fdbc4f3d8d22' => 
    array (
      0 => 'F:\\xampp\\htdocs\\p\\templates\\login.tpl',
      1 => 1539793677,
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
function content_5bc7633a1bf057_81336082 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <h1>Logearse</h1>

    <form method="post" action="verificarLogin">

        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <label for="pass">Clave</label>
        <input type="password" name="pass" id="pass">
        <p><?php echo $_smarty_tpl->tpl_vars['Message']->value;?>
</p>

      <button type="submit">Login</button>
    </form>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
