<?php
/* Smarty version 3.1.33, created on 2018-10-18 04:10:22
  from 'I:\Xampp\htdocs\p2\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc7eb8e2e9125_36713126',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4759c07f33c8da1ee93483596ba73e338bbe4d89' => 
    array (
      0 => 'I:\\Xampp\\htdocs\\p2\\templates\\login.tpl',
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
function content_5bc7eb8e2e9125_36713126 (Smarty_Internal_Template $_smarty_tpl) {
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
