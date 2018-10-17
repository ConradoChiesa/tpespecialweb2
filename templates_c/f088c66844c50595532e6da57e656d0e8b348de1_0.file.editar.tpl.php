<?php
/* Smarty version 3.1.33, created on 2018-10-03 05:04:11
  from 'I:\Xampp\htdocs\pn\templates\editar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bb431ab062de1_33754285',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f088c66844c50595532e6da57e656d0e8b348de1' => 
    array (
      0 => 'I:\\Xampp\\htdocs\\pn\\templates\\editar.tpl',
      1 => 1538535848,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bb431ab062de1_33754285 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
