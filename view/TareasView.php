<?php
require('libs/Smarty.class.php');

class TareasView
{
  private $Smarty;

  function __construct()
  {
    $this->Smarty = new Smarty();
  }

  function Mostrar($Personajes,$Hechos){
    $this->Smarty->assign('Personajes',$Personajes);
    $this->Smarty->assign('Hechos',$Hechos);
    $this->Smarty->display('templates/home.tpl');

  }

  function MostrarEdicion($Personajes,$Hechos){
    $this->Smarty->assign('Personajes',$Personajes);
    $this->Smarty->assign('Hechos',$Hechos);
    $this->Smarty->display('templates/edicion.tpl');

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

  function Logearse(){
    $this->Smarty->display('templates/login.tpl');
  }

  function MostrarPersonajes($Personajes,$Hechos) {
    $this->Smarty->assign('Personajes',$Personajes);
    $this->Smarty->assign('Hechos',$Hechos);
    $this->Smarty->display('templates/personajes.tpl');
  }

  function MostrarHechosDePersonajes($HechosDePersonaje,$Personaje) {
    $this->Smarty->assign('HechosDePersonaje',$HechosDePersonaje);
    $this->Smarty->assign('Personaje',$Personaje);
    $this->Smarty->display('templates/hechosDePersonaje.tpl');    
  }
 

}

 ?>