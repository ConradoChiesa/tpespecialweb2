<?php
/* Smarty version 3.1.33, created on 2018-10-17 21:49:56
  from 'F:\xampp\htdocs\p\templates\edicion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc79264974ce1_62162819',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b50622e27dd8477bb239bc5bacd84d5b6015657' => 
    array (
      0 => 'F:\\xampp\\htdocs\\p\\templates\\edicion.tpl',
      1 => 1539803467,
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
function content_5bc79264974ce1_62162819 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1>Editar Personajes y Hechos</h1>

  <form method="post" action="crear">
        <button type="submit" class="btn btn-primary">Ir a Crear</button>
      </form>
    </div>

  <h2>Lista de personajes</h2>
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
    
          
  <h2>Lista de hechos</h4>
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


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
