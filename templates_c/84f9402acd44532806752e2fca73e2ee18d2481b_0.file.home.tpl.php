<?php
/* Smarty version 3.1.33, created on 2018-10-18 15:49:42
  from 'I:\Xampp\htdocs\p6\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc88f76396d46_98348311',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84f9402acd44532806752e2fca73e2ee18d2481b' => 
    array (
      0 => 'I:\\Xampp\\htdocs\\p6\\templates\\home.tpl',
      1 => 1539826869,
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
function content_5bc88f76396d46_98348311 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <div class="contenedor">
    <article class="articulo-uno">
        <h2><a href="mafalda">Mafalda</a></h2>
        <img src="images/mafalda02.jpg" alt="Mafala mirando el globo terráqueo"/>
    </article>
    <article class="articulo-dos">
        <h2><a href="chapulin">El Chapulín Colorado</a></h2>
        <img src="images/chapulin01.jpg" alt="El Chapulín con su chipote chillón"/>
    </article>
    <article class="articulo-tres">
        <h2><a href="sandokan">Sandokán</a></h2>
        <img src="images/sandokan1.jpg" alt="Sandokán apunta con una pistola"/>
    </article>
    <article class="articulo-cuatro">
        <h2><a href="superagente">El Superagente 86</a></h2>
        <img src="images/agente03.jpg" alt="El Superagente 86 junto a 91, el Jefe de Control y Siegfried"/>
    </article>
</div>
    
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
