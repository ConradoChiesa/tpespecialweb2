<?php
/* Smarty version 3.1.33, created on 2018-10-18 19:25:22
  from 'I:\Xampp\htdocs\p6\templates\hechosDePersonaje.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc8c20292d4a6_94657998',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c616215db79f06b98607a75b70c07bf75db2b368' => 
    array (
      0 => 'I:\\Xampp\\htdocs\\p6\\templates\\hechosDePersonaje.tpl',
      1 => 1539883517,
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
function content_5bc8c20292d4a6_94657998 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2>Hechos de Personaje</h2>

<h4 class="conteListaPerso"><?php echo $_smarty_tpl->tpl_vars['Personaje']->value['nombre'];?>
</h4>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['HechosDePersonaje']->value, 'elem');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['elem']->value) {
?>
	<div>
		<p><?php echo $_smarty_tpl->tpl_vars['elem']->value['hecho'];?>
</p>
	</div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
