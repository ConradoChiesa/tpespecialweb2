<?php
  require('libs/Smarty.class.php');
class personajesView
{
  function __construct()
  {
    $this->Smarty = new Smarty();
  }
  function Mostrar($Titulo, $personajes){
    $smarty = new Smarty();
    $smarty->assign('Titulo',$Titulo);
    $smarty->assign('personajes',$personajes);
    $smarty->display('templates/home.tpl');
  }
}

 ?>
