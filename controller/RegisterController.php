<?php

require_once  "./view/RegisterView.php";
require_once  "./model/UsuarioModel.php";


class RegisterController {
  private $view;
  private $model;
  private $Titulo;

  function __construct() {
    $this->view = new RegisterView();
    $this->model = new UsuarioModel();
    $this->Titulo = "Registro de usuarios";
  }

  function register() {
    if ($_SERVER['REQUEST_METHOD'] == 'GET' ) {
      //GET formulario de registro
      $this->view->mostrarRegistro();
    } else {
      //POST formulario. datos: nombre, user, email, password
      $nombre = $_POST["nombre"];
      $usuario = $_POST["usuario"];
      $email = $_POST["email"];
      $password = $_POST["password"];
      $repassword = $_POST["password_confirmation"];
      if ($password == $repassword) {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $this->model->InsertarUsuario($nombre, $usuario, $email, $password);
        header(LOGIN);
      } else {
        $this->view->mostrarRegistro("Passwor incorrecto");
      }
    }
  }
}

 ?>
