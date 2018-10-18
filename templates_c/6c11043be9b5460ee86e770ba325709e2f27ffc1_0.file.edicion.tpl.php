<?php
/* Smarty version 3.1.33, created on 2018-10-18 19:51:51
  from 'I:\Xampp\htdocs\p6\templates\edicion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc8c837cf6160_98169674',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c11043be9b5460ee86e770ba325709e2f27ffc1' => 
    array (
      0 => 'I:\\Xampp\\htdocs\\p6\\templates\\edicion.tpl',
      1 => 1539885108,
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
function content_5bc8c837cf6160_98169674 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<form method="post" action="crear">
  <button type="submit" class="crearPersoHechos">Crear personajes o hechos</button>
</form>

  <div class="centrado">
    <h2>Editar personajes</h2>
    <div class="container">
      <ul class="list-group">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Personajes']->value, 'elem');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['elem']->value) {
?>
              <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['elem']->value['nombre'];?>
  <?php echo $_smarty_tpl->tpl_vars['elem']->value['actividad'];?>
  <?php echo $_smarty_tpl->tpl_vars['elem']->value['nacimiento'];?>

                <a href="editarPersonaje/<?php echo $_smarty_tpl->tpl_vars['elem']->value['id_personaje'];?>
">Editar</a>
                <a href="borrarPersonaje/<?php echo $_smarty_tpl->tpl_vars['elem']->value['id_personaje'];?>
">Borrar</a> </li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    </div>

  <h2>Editar hechos</h2>
    <div class="container">
      <ul class="list-group">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Hechos']->value, 'elem');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['elem']->value) {
?>
          <li class="list-group-item"> <?php echo $_smarty_tpl->tpl_vars['elem']->value['hecho'];?>
 <?php echo $_smarty_tpl->tpl_vars['elem']->value['nombre'];?>

            <a href="editarHecho/<?php echo $_smarty_tpl->tpl_vars['elem']->value['id_hecho'];?>
">Editar</a>
            <a href="borrarHecho/<?php echo $_smarty_tpl->tpl_vars['elem']->value['id_hecho'];?>
">Borrar</a>
            </li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    </div>  
  </div>
  

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
