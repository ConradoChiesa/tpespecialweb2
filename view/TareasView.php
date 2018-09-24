<?php
require('libs/Smarty.class.php');
/**
 *
 */
class TareasView
{

  function Mostrar($Personajes,$Hechos){
    $smarty = new Smarty();
    $smarty->assign('Personajes',$Personajes);
    $smarty->assign('Hechos',$Hechos);
    //$smarty->debugging = true;
    $smarty->display('templates/home.tpl');

  }
}

 ?>
