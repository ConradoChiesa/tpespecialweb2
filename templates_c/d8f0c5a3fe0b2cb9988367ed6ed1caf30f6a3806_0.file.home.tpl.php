<?php
/* Smarty version 3.1.33, created on 2018-09-23 22:15:59
  from 'D:\servidor\htdocs\Dropbox\livecoding\Tareas\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ba7f47fd25625_69153041',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8f0c5a3fe0b2cb9988367ed6ed1caf30f6a3806' => 
    array (
      0 => 'D:\\servidor\\htdocs\\Dropbox\\livecoding\\Tareas\\templates\\home.tpl',
      1 => 1537552648,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5ba7f47fd25625_69153041 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <h1><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1>

    <div class="container">
      <ul class="list-group">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Tareas']->value, 'tarea');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tarea']->value) {
?>
              <?php if ($_smarty_tpl->tpl_vars['tarea']->value['completada'] == 1) {?>
                <li class="list-group-item"><s><?php echo $_smarty_tpl->tpl_vars['tarea']->value['titulo'];?>
 ----- <?php echo $_smarty_tpl->tpl_vars['tarea']->value['descripcion'];?>
</s><a href="borrar/<?php echo $_smarty_tpl->tpl_vars['tarea']->value['id'];?>
">BORRAR</a></li>
              <?php } else { ?>
                <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['tarea']->value['titulo'];?>
 ----- <?php echo $_smarty_tpl->tpl_vars['tarea']->value['descripcion'];?>
<a href="borrar/<?php echo $_smarty_tpl->tpl_vars['tarea']->value['id'];?>
">BORRAR</a> | <a href="completada/<?php echo $_smarty_tpl->tpl_vars['tarea']->value['id'];?>
">COMPLETADA</a></li>
              <?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    </div>

    <div class="container">
      <h2>Formulario</h2>
      <form method="post" action="agregar">
        <div class="form-group">
          <label for="tituloForm">Titulo</label>
          <input type="text" class="form-control" id="tituloForm" name="tituloForm">
        </div>
        <div class="form-group">
          <label for="descripcionForm">Descripcion</label>
          <input type="text" class="form-control" id="descripcionForm" name="descripcionForm">
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="completadaForm" name="completadaForm">
          <label class="form-check-label" for="completadaForm">Completada?</label>
        </div>
        <button type="submit" class="btn btn-primary">Crear Tarea</button>
      </form>
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
