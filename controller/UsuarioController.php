<?php
require_once  "./view/UsuarioView.php";
require_once  "./model/UsuarioModel.php";
require_once "SecuredController.php";

class UsuarioController
{
  private $view;
  private $model;
  private $Titulo;

  function __construct()
  {
    $this->view = new UsuarioView();
    $this->model = new UsuarioModel();
    $this->Titulo = "Lista de usuarios";
  }

  function MostrarUsuario(){
      $Usuarios = $this->model->GetUsuario();
      $this->view->Mostrar($this->Titulo, $Usuarios);
  }

  function AgregarUsuario(){
    // chequear si el usuario ya existe
    if ((isset($_POST["email"]))&&($_POST["pass"] == $_POST["passcheq"])&&($_POST["pass"]!="")) {
      $email = $_POST["email"];
      $pass = $_POST["pass"];
      $hash = password_hash("$pass", PASSWORD_DEFAULT);
      $this->model->InsertarUsuario($email,$hash);
      header(LOGEARSE);
    } else {
      header(REGISTRARSE);
      die();
    }
  }


}

 ?>
