<?php
/* Smarty version 3.1.33, created on 2018-09-24 04:57:47
  from 'I:\Xampp\htdocs\extareas\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ba852ab6610e4_33474933',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d73ae5071744f5eb9d16cb9a44c19742d67d6b5' => 
    array (
      0 => 'I:\\Xampp\\htdocs\\extareas\\templates\\home.tpl',
      1 => 1537757864,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5ba852ab6610e4_33474933 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <h2>Lista de personajes</h2>
    <div class="container">
      <ul class="list-group">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Personajes']->value, 'perso');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['perso']->value) {
?>
              <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['perso']->value['nombre'];?>
 Actividad: <?php echo $_smarty_tpl->tpl_vars['perso']->value['actividad'];?>
 Nacimiento: <?php echo $_smarty_tpl->tpl_vars['perso']->value['nacimiento'];?>
</li>
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Hechos']->value, 'hecho');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['hecho']->value) {
?>
          <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['hecho']->value['hecho'];?>
 <?php echo $_smarty_tpl->tpl_vars['hecho']->value['id_personaje'];?>
</li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    </div>

     <div class="container">
      <h2>Crear personaje</h2>
      <form method="post" action="agregar">
        <div class="form-group">
          <label for="nombreForm">Nombre</label>
          <input type="text" class="form-control" id="nombreForm" name="nombreForm">
        </div>
        <div class="form-group">
          <label for="nacimientoForm">Nacimiento</label>
          <input type="text" class="form-control" id="nacimientoForm" name="nacimientoForm">
        </div>
         <div class="form-group">
          <label for="actividadForm">Actividad</label>
          <input type="text" class="form-control" id="actividadForm" name="actividadForm">
        </div>
        </div>
        <button type="submit" class="btn btn-primary">Crear Personaje</button>
      </form>
    </div>
  
     <div class="container">
      <h2>Crear hecho</h2>
      <form method="post" action="agregarHecho">
        <div class="form-group">
          <label for="hechoForm">Hecho a agregar</label>
          <textarea name="hechoForm" id="hechoForm" cols="50" rows="10"></textarea>
        </div>
        <div class="form-group">
          <select name="persoHechoForm" id="persoHechoForm">
            <option value=""></option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Personajes']->value, 'perso');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['perso']->value) {
?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['perso']->value['id_personaje'];?>
"><?php echo $_smarty_tpl->tpl_vars['perso']->value['nombre'];?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Agregar Hecho</button>
      </form>
    </div>





    
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
