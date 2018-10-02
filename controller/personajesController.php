<?php
require_once  "./view/personajesView.php";
require_once  "./model/personajesModel.php";
require_once  "SecuredController.php";
class personajesController extends SecuredController
{
  private $view;
  private $model;
  private $Titulo;

  function __construct()
  {
    $this->view = new personajesView();
    $this->model = new personajesModel();
    $this->Titulo = "Heroes y Heroinas";
  }

  // function Portada()
  // {
  //       header(home);
  // }

  function Home(){
      $personajes = $this->model->Getpersonajes();
      $this->view->Mostrar($this->Titulo, $personajes);
  }

  function Insertpersonaje(){
    $titulo = $_POST["tituloForm"];
    $descripcion = $_POST["descripcionForm"];

    if(isset($_POST["completadaForm"])){
      $completada = 1;
    }else{
      $completada = 0;
    }

    $this->model->Insertarpersonaje($titulo,$descripcion,$completada);

    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }

  function Borrarpersonaje($param){
    $this->model->Borrarpersonaje($param[0]);
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }

  function Completarpersonaje($param){
    $this->model->Completarpersonaje($param[0]);
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));

  }
}

 ?>
