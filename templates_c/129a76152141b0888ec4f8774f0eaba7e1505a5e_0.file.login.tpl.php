<?php
/* Smarty version 3.1.33, created on 2018-10-16 14:57:20
  from 'I:\Xampp\htdocs\Dropbox\pn\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc5e030e93147_58339426',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '129a76152141b0888ec4f8774f0eaba7e1505a5e' => 
    array (
      0 => 'I:\\Xampp\\htdocs\\Dropbox\\pn\\templates\\login.tpl',
      1 => 1539694539,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bc5e030e93147_58339426 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
    </div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
