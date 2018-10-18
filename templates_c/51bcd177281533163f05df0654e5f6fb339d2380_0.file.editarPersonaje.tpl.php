<?php
/* Smarty version 3.1.33, created on 2018-10-18 18:03:26
  from 'I:\Xampp\htdocs\p6\templates\editarPersonaje.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc8aece795da0_40704822',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51bcd177281533163f05df0654e5f6fb339d2380' => 
    array (
      0 => 'I:\\Xampp\\htdocs\\p6\\templates\\editarPersonaje.tpl',
      1 => 1539878557,
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
function content_5bc8aece795da0_40704822 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2>Editar personaje: </h2>

<img src="images/agente02.jpg" alt="El Superagente y su Zapatófono" class="zapatofono">

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

    <input type="hidden" id="id_personaje" name="id_personaje" value="<?php echo $_smarty_tpl->tpl_vars['Perso']->value['id_personaje'];?>
">
    <button type="submit" class="btn btn-primary">Modificar personaje</button>
  </form>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
