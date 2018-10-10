<?php
require_once  "./view/personajesView.php";
require_once  "./model/personajesModel.php";

class personajesController
{
  private $view;
  private $model;

  function __construct() {
    $this->view = new personajesView();
    $this->model = new personajesModel();
  }

  function Home() {
      $personajes = $this->model->Getpersonajes();
      $this->view->Mostrar($personajes);
  }

  function homeuser() {
      $Personajes = $this->model->GetPersonajes();
      $Hechos = $this->model->GetHechos();
      $this->view->Mostrar($Personajes,$Hechos);
  }

  function Crear() {
      $Personajes = $this->model->GetPersonajes();
      $Hechos = $this->model->GetHechos();
      $this->view->MostrarCrear($Personajes,$Hechos);
  }

  function Insertpersonaje() {
    $titulo = $_POST["tituloForm"];
    $descripcion = $_POST["descripcionForm"];
    if(isset($_POST["completadaForm"])){
      $completada = 1;
    } else {
      $completada = 0;
    }
    $this->model->Insertarpersonaje($titulo,$descripcion,$completada);
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }

  function Borrarpersonaje($param) {
    $this->model->Borrarpersonaje($param[0]);
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }

  function Completarpersonaje($param) {
    $this->model->Completarpersonaje($param[0]);
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }
}

 ?>
