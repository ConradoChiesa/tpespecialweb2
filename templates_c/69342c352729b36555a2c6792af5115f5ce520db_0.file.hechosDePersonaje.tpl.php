<?php
/* Smarty version 3.1.33, created on 2018-10-17 02:04:40
  from 'I:\Xampp\htdocs\Dropbox\pn\templates\hechosDePersonaje.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc67c989f9ed2_65988392',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69342c352729b36555a2c6792af5115f5ce520db' => 
    array (
      0 => 'I:\\Xampp\\htdocs\\Dropbox\\pn\\templates\\hechosDePersonaje.tpl',
      1 => 1539723833,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bc67c989f9ed2_65988392 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h3>Hechos de Personaje</h3>



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
