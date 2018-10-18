<?php
/* Smarty version 3.1.33, created on 2018-10-17 04:54:22
  from 'I:\Xampp\htdocs\Dropbox\pncss\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc6a45e203200_62644662',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0362f723402fad13e975229ef8ebac5cbf4a2e30' => 
    array (
      0 => 'I:\\Xampp\\htdocs\\Dropbox\\pncss\\templates\\home.tpl',
      1 => 1539744845,
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
function content_5bc6a45e203200_62644662 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <h1>Personajes Notables</h1>
        <h3 class="eslogan">Héroes y heroínas que están en el corazón.</h3>

<?php $_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <div class="contenedor">
    <article class="articulo-uno">
        <h2>Mafalda</h2>
        <img src="images/mafalda02.jpg" alt="Mafala mirando el globo terráqueo"/>
    </article>
    <article class="articulo-dos">
        <h2>El Chapulín Colorado</h2>
        <img src="images/chapulin01.jpg" alt="El Chapulín con su chipote chillón"/>
    </article>
    <article class="articulo-tres">
        <h2>Sandokán</h2>
        <img src="images/sandokan1.jpg" alt="Sandokán apunta con una pistola"/>
    </article>
    <article class="articulo-cuatro">
        <h2>El Superagente 86</h2>
        <img src="images/agente03.jpg" alt="El Superagente 86 junto a 91, el Jefe de Control y Siegfried"/>
    </article>
</div>
    
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
