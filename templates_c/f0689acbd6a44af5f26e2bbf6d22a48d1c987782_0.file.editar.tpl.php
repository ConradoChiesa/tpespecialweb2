<?php
/* Smarty version 3.1.33, created on 2018-10-18 02:48:28
  from 'I:\Xampp\htdocs\p\templates\editar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc7d85c798086_62564069',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0689acbd6a44af5f26e2bbf6d22a48d1c987782' => 
    array (
      0 => 'I:\\Xampp\\htdocs\\p\\templates\\editar.tpl',
      1 => 1539793592,
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
function content_5bc7d85c798086_62564069 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <h2>Editar</h2>

    <div class="container">
      
      <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/modificarHecho">
       
        <div class="form-group">
          <label for="hechoForm">Reescribir el hecho: </label>
          <textarea name="hechoForm" id="hechoForm" cols="70" rows="3" placeholder="<?php echo $_smarty_tpl->tpl_vars['Hecho']->value;?>
"></textarea>
        </div>

        <input type="hidden" id="idHecho" name="idHecho" value="<?php echo $_smarty_tpl->tpl_vars['Id_hecho']->value;?>
">

        <button type="submit" class="btn btn-primary">Editar</button>
      </form>
    </div>   
     

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>





<?php }
}
