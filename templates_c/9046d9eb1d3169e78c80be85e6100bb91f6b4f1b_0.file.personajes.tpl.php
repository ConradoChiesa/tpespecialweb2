<?php
/* Smarty version 3.1.33, created on 2018-10-18 15:15:24
  from 'I:\Xampp\htdocs\p2\templates\personajes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc8876c8b7208_61108473',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9046d9eb1d3169e78c80be85e6100bb91f6b4f1b' => 
    array (
      0 => 'I:\\Xampp\\htdocs\\p2\\templates\\personajes.tpl',
      1 => 1539793700,
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
function content_5bc8876c8b7208_61108473 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <h1>Lista de personajes</h1>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Personajes']->value, 'perso');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['perso']->value) {
?>
  <h5> <?php echo $_smarty_tpl->tpl_vars['perso']->value['nombre'];?>
 </h5>
  <p>Nació en: <?php echo $_smarty_tpl->tpl_vars['perso']->value['nacimiento'];?>
 </p>
  <p>Actividad: <?php echo $_smarty_tpl->tpl_vars['perso']->value['actividad'];?>
 </p>
  <form action="hechosDelPersonaje" method="post">
	   <input type="hidden" name="idPersonaje" id="idPersonaje" value="<?php echo $_smarty_tpl->tpl_vars['perso']->value['id_personaje'];?>
">
	   <button class="btn-perso" type="submit">Ver hechos del personaje</button>
  </form>
  <p></p>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


















<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
