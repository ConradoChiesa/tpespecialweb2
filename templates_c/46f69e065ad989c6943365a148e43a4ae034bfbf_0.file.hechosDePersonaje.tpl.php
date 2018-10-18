<?php
/* Smarty version 3.1.33, created on 2018-10-17 18:34:20
  from 'F:\xampp\htdocs\p\templates\hechosDePersonaje.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc7648c8ca3c0_95647077',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46f69e065ad989c6943365a148e43a4ae034bfbf' => 
    array (
      0 => 'F:\\xampp\\htdocs\\p\\templates\\hechosDePersonaje.tpl',
      1 => 1539793655,
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
function content_5bc7648c8ca3c0_95647077 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2>Hechos de Personaje</h2>

<h3 class="persoNombre"><?php echo $_smarty_tpl->tpl_vars['Personaje']->value['nombre'];?>
</h3>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['HechosDePersonaje']->value, 'elem');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['elem']->value) {
?>

	<p><?php echo $_smarty_tpl->tpl_vars['elem']->value['hecho'];?>
</p>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>





<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
