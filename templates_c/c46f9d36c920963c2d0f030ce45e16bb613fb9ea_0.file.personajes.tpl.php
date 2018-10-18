<?php
/* Smarty version 3.1.33, created on 2018-10-18 19:09:37
  from 'I:\Xampp\htdocs\p6\templates\personajes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc8be5126ba05_80905108',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c46f9d36c920963c2d0f030ce45e16bb613fb9ea' => 
    array (
      0 => 'I:\\Xampp\\htdocs\\p6\\templates\\personajes.tpl',
      1 => 1539882573,
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
function content_5bc8be5126ba05_80905108 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <h2 class="listaPersonajes">Lista completa de personajes</h2>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Personajes']->value, 'perso');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['perso']->value) {
?>
  <div class="conteListaPerso">
  	<h4> <?php echo $_smarty_tpl->tpl_vars['perso']->value['nombre'];?>
 </h4>
  	<p>Nació en: <?php echo $_smarty_tpl->tpl_vars['perso']->value['nacimiento'];?>
 </p>
  	<p>Actividad: <?php echo $_smarty_tpl->tpl_vars['perso']->value['actividad'];?>
 </p>
  	<form action="hechosDelPersonaje" method="post">
	   <input type="hidden" name="idPersonaje" id="idPersonaje" value="<?php echo $_smarty_tpl->tpl_vars['perso']->value['id_personaje'];?>
">
	   <button class="btn-perso" type="submit">Ver hechos del personaje</button>
  	</form>	
  </div>
  
  <p></p>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


















<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
