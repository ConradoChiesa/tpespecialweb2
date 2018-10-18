<?php
/* Smarty version 3.1.33, created on 2018-09-24 02:39:56
  from 'I:\Xampp\htdocs\extareas\templates\personajes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ba8325c281b14_80516674',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '057f9f12f09320a178d0f6ac3899b1d792d61679' => 
    array (
      0 => 'I:\\Xampp\\htdocs\\extareas\\templates\\personajes.tpl',
      1 => 1537749255,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5ba8325c281b14_80516674 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    
    <h4>Personajes...</h4>
    <div class="container">
      <ul class="list-group">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Personajes']->value, 'perso');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['perso']->value) {
?>
              <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['perso']->value['nombre'];?>
    <?php echo $_smarty_tpl->tpl_vars['perso']->value['actividad'];?>
     <?php echo $_smarty_tpl->tpl_vars['perso']->value['nacimiento'];?>
</li>

            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    </div>



<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
