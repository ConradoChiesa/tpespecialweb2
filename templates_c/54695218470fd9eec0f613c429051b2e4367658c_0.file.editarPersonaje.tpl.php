<?php
/* Smarty version 3.1.33, created on 2018-10-17 20:34:38
  from 'F:\xampp\htdocs\p\templates\editarPersonaje.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc780be4185a2_63221883',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54695218470fd9eec0f613c429051b2e4367658c' => 
    array (
      0 => 'F:\\xampp\\htdocs\\p\\templates\\editarPersonaje.tpl',
      1 => 1539793610,
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
function content_5bc780be4185a2_63221883 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2>Editar personaje: </h2>

<p></p>

  <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/modificarPerso">
    <label for="nombrePerso">Nombre: </label>
    <input type="text" id="nomPerso" name="nomPerso" placeholder="<?php echo $_smarty_tpl->tpl_vars['Perso']->value['nombre'];?>
">

    <label for="naciPerso">Nacimiento: </label>
    <input type="text" id="naciPerso" name="naciPerso" placeholder="<?php echo $_smarty_tpl->tpl_vars['Perso']->value['nacimiento'];?>
">

    <label for="actiPerso">Actividad: </label>
    <input type="text" id="actiPerso" name="actiPerso" placeholder="<?php echo $_smarty_tpl->tpl_vars['Perso']->value['actividad'];?>
">

    <input id="id_personaje" name="id_personaje" value="<?php echo $_smarty_tpl->tpl_vars['Perso']->value['id_personaje'];?>
">
    <button type="submit" class="btn btn-primary">Modificar personaje</button>
  </form>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
