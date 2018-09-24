<?php
require_once  "./view/TareasView.php";
require_once  "./model/TareasModel.php";

class TareasController
{
  private $view;
  private $model;

  function __construct()
  {
    $this->view = new TareasView();
    $this->model = new TareasModel();
    $this->Titulo = "Lista de Tareas Controlador 1";
  }

  function Home(){
      $Personajes = $this->model->GetTareas();
      $Hechos = $this->model->GetHechos();
      $this->view->Mostrar($Personajes,$Hechos);
  }

  function InsertTarea(){
    $nombre = $_POST["nombreForm"];
    $nacimiento = $_POST["nacimientoForm"];
    $actividad = $_POST["actividadForm"];

    $this->model->InsertarTarea($nombre,$nacimiento,$actividad);

    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }

  function InsertHecho(){
      $hecho = $_POST["hechoForm"];
      $perso = $_POST["persoHechoForm"];

      $this->model->InsertarHecho($perso,$hecho);

      header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
    }



  function BorrarTarea($param){
    $this->model->BorrarTarea($param[0]);
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }

  function CompletarTarea($param){
    $this->model->CompletarTarea($param[0]);
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));

  }
}

 ?>
