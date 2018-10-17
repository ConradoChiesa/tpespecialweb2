<?php
require_once  "./view/TareasView.php";
require_once  "./model/TareasModel.php";
require_once  "./view/UsuarioView.php";

class NavigationController
{
  private $view;
  private $model;

  function __construct()
  {
    $this->view = new TareasView();
    $this->model = new TareasModel();
    $this->viewUser = new UsuarioView();
  }

  function Home(){
    $Personajes = $this->model->GetPersonajes();
    $Hechos = $this->model->GetHechos();
    $this->view->Mostrar($Personajes,$Hechos);
  }

  function Personajes() {
    $Personajes = $this->model->GetPersonajes();
    $Hechos = $this->model->GetHechos();
    $this->view->MostrarPersonajes($Personajes,$Hechos);
  }

  function HechosDelPersonaje() {
    $Id = $_POST["idPersonaje"];
    $HechosDePersonaje = $this->model->GetHechosDePersonaje($Id);
    $Personaje = $this->model->GetPersonaje($Id);
    $this->view->MostrarHechosDePersonajes($HechosDePersonaje, $Personaje);
  }

  function Registrarse() {
    $this->viewUser->MostrarRegistrarse();
  }

}

 ?>
