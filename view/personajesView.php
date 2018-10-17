<?php
  require('libs/Smarty.class.php');
class personajesView
{
  function __construct() {
    $this->Smarty = new Smarty();
  }

  function Mostrar($Personajes, $Hechos){
    $this->Smarty->assign('Personajes',$Personajes);
    $this->Smarty->assign('Hechos',$Hechos);
    $this->Smarty->display('templates/home.tpl');
  }

  function MostrarCrear($Personajes,$Hechos){
    $this->Smarty->assign('Personajes',$Personajes);
    $this->Smarty->assign('Hechos',$Hechos);
    $this->Smarty->display('templates/crear.tpl');

  }

  function MostrarEditarHecho($Hecho,$Id_hecho){
    $this->Smarty->assign('Hecho',$Hecho);
    $this->Smarty->assign('Id_hecho',$Id_hecho);
    $this->Smarty->assign('home',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
    $this->Smarty->display('templates/editar.tpl');
  }

  function MostrarEditarPerso($Perso){
    $this->Smarty->assign('Perso',$Perso);
    $this->Smarty->assign('home',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
    $this->Smarty->display('templates/editarPersonaje.tpl');
  }

}

 ?>
