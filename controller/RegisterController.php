<?php

require_once  "./view/RegisterView.php";
require_once  "./model/UsuarioModel.php";
require_once  "SecuredController.php";


class RegisterController extends SecuredController
{
  private $view;
  private $model;
  private $Titulo;
  function __construct() {

    $this->view = new RegisterView();
    $this->model = new UsuarioModel();
    $this->secCont = new SecuredController();
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
  function EditarDatos() {
    if ($this->secCont->logeado()) {
      // $id_usuario = $param[0];
      // $usuario = $this->model->GetUsuario($usuario);
      $this->view->modificarDatos();
    }
  }

  // function EditarUsuario($usuario) { //EditarUsuario($param)
  //   if ($this->secCont->logeado()) {
  //     $usuario = $this->model->GetUsuario($usuario);
  //     $this->view->modificarDatos('Modifique sus datos');
  //   }
  // }
  function modificarDatos($usuario) {
    if ($this->secCont->logeado()) {
      if (isset($usuario) && $usuario == true) {
        // $this->view->modificarDatos('Modifique sus datos');
        // $this->model->GetUsuario($usuario)
        if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {
          $id_usuario = $_POST["id_usuario"];
          $nombre = $_POST["nombre"];
          $usuario = $_POST["usuario"];
          $email = $_POST["email"];
          $this->model->modificaUsuario($id_usuario, $nombre, $usuario, $email);
          $this->view->modificarDatos('Usuario modificado con exito');
        } else {
          header(LOGIN);
          // $this->view->modificarDatos('El ususario no fue modificado');
        }
      }
    } else {
      $this->view->modificarDatos('');
    }
  }
}

 ?>
