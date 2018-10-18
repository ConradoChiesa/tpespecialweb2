<?php
require_once  "./view/TareasView.php";
require_once  "./model/TareasModel.php";
require_once  "SecuredController.php";

class TareasController extends SecuredController
{
  private $view;
  private $model;

  function __construct()
  {
    parent::__construct();
    $this->view = new TareasView();
    $this->model = new TareasModel();
  }

  function Edicion(){
    $Personajes = $this->model->GetPersonajes();
    $Hechos = $this->model->GetHechos();
    $this->view->MostrarEdicion($Personajes,$Hechos);
  }

  function Crear(){
      $Personajes = $this->model->GetPersonajes();
      $Hechos = $this->model->GetHechos();
      $this->view->MostrarCrear($Personajes,$Hechos);
  }

  function InsertPersonaje(){
    if ($_POST["nombreForm"] && $_POST["nacimientoForm"] && $_POST["actividadForm"]) {
      $nombre = $_POST["nombreForm"];
      $nacimiento = $_POST["nacimientoForm"];
      $actividad = $_POST["actividadForm"];
      $this->model->InsertarPersonaje($nombre,$nacimiento,$actividad);
      header(PERSONAJES);
      die();
    } else {
      $Message = "Llenar todos los datos del personaje.";
      $Personajes = $this->model->GetPersonajes();
      $Hechos = $this->model->GetHechos();
      $this->view->MostrarCrear($Personajes,$Hechos,$Message);
    }
  }

  function InsertHecho(){
    if ($_POST["hechoForm"] && $_POST["persoHechoForm"]) {
      $hecho = $_POST["hechoForm"];
      $perso = $_POST["persoHechoForm"];
      $this->model->InsertarHecho($perso,$hecho);
      header(PERSONAJES);
      die();
    } else {
      $MessageHecho = "Seleccionar personaje y también escribir el hecho a agregar.";
      $Message = "";
      $Personajes = $this->model->GetPersonajes();
      $Hechos = $this->model->GetHechos();
      $this->view->MostrarCrear($Personajes,$Hechos,$Message,$MessageHecho);
    }
  }

  function BorrarPersonaje($param){
    $this->model->EliminarPersonaje($param[0]);
    header(PERSONAJES);
    die();
  }

  function BorrarHecho($param){
    $this->model->EliminarHecho($param[0]);
    header(PERSONAJES);
    die();
  }

  function EditarHecho($param){
    $id_hecho = $param[0];
    $Hecho = $this->model->GetHecho($id_hecho);
    $this->view->MostrarEditarHecho($Hecho,$id_hecho);
  }

  function ModificarHecho() {
    if ($_POST["idHecho"] && $_POST["hechoForm"]) {
      $Id_hecho = $_POST["idHecho"];
      $Hecho = $_POST["hechoForm"];
      $this->model->ActualizarHecho($Hecho,$Id_hecho);
    header(PERSONAJES);
    die();
    } else {
      echo "completar todos los datos, para editar";
    }
  }

  function EditarPersonaje($param){
      $id = $param[0];
      $Perso = $this->model->GetPersonaje($id);
      $this->view->MostrarEditarPerso($Perso);
    }

  function ModificarPerso() {
    if ($_POST["nomPerso"] && $_POST["naciPerso"] && $_POST["actiPerso"]) {
      $nomPerso = $_POST["nomPerso"];
      $naciPerso = $_POST["naciPerso"];
      $actiPerso = $_POST["actiPerso"];
      $idPerso = $_POST["id_personaje"];
      $this->model->ActualizarPerso($nomPerso,$naciPerso,$actiPerso,$idPerso);
      header(PERSONAJES);
      die();
    } else {
      echo "Faltan datos para poder editar el personaje";
    }
  }

}

 ?>
