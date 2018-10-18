<?php
/* Smarty version 3.1.33, created on 2018-10-17 15:48:12
  from 'I:\Xampp\htdocs\Dropbox\p\templates\nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc73d9c7c1810_25631669',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '764dbb37720fa1e4a6c1b79633d7eb3df1494c66' => 
    array (
      0 => 'I:\\Xampp\\htdocs\\Dropbox\\p\\templates\\nav.tpl',
      1 => 1539770509,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bc73d9c7c1810_25631669 (Smarty_Internal_Template $_smarty_tpl) {
?>            <ul class="barra">
              <li class="item-barra">
                <form method="post" action="">
                  <button type="submit">Inicio</button>
                </form>
              </li>              
              <li class="item-barra">
                <form method="post" action="registrarse">
                  <button type="submit">Registrarse</button>
                </form>
              </li>
              <li class="item-barra">
                <form method="post" action="logearse">
                  <button type="submit">Login</button>
                </form>
              </li>
              <li class="item-barra">
                <form method="post" action="personajes">
                  <button type="submit">Ir a personajes</button>
                </form>
              </li>
              <li class="item-barra">
                <form method="post" action="logout">
                  <button type="submit">Cerrar sesión</button>
                </form>
              </li>
              <li class="item-barra">
                <form method="post" action="crear">
                  <button type="submit">Crear</button>
                </form>
              </li>
            </ul><?php }
}
