<?php
/* Smarty version 3.1.33, created on 2018-10-17 04:54:22
  from 'I:\Xampp\htdocs\Dropbox\pncss\templates\nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc6a45e273d51_60686687',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa0143c34b2436fd9840a9dea0b7a461a92f7e47' => 
    array (
      0 => 'I:\\Xampp\\htdocs\\Dropbox\\pncss\\templates\\nav.tpl',
      1 => 1539744803,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bc6a45e273d51_60686687 (Smarty_Internal_Template $_smarty_tpl) {
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
