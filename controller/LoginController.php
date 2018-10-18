<?php

require_once  "./view/LoginView.php";
require_once  "./model/UsuarioModel.php";
require_once  "SecuredController.php";


class LoginController extends SecuredController
{
  private $view;
  private $model;
  private $Titulo;

  function __construct()
  {
    $this->view = new LoginView();
    $this->model = new UsuarioModel();
    $this->Titulo = "Login";
  }


  function login() {
    $this->view->mostrarLogin();
  }

  function loginAdmin($usuario) {
    $this->model->getUsuario($usuario);
    $this->view->mostrarLoginAdmin($usuario);
  }

  function logout() {
    session_start();
    session_destroy();
    header(LOGIN);
  }

  function verificarLogin() {
      $usuario = $_POST["usuarioId"];
      $password = $_POST["passwordId"];
      $dbUser = $this->model->getUsuario($usuario);
      if(isset($dbUser) && sizeof($dbUser) > 0) {
          if (password_verify($password, $dbUser[0]["password"])) {
            session_start();
            if (($dbUser[0]["esadmin"]) == 1) {
              $_SESSION["Admin"] = $usuario;
              header(HOME);
            } else {
              $_SESSION["User"] = $usuario;
              header(HOME);
            }
              // header(HOME);
          } else {
            $this->view->mostrarLogin("Contraseña incorrecta");
          }
      } else {
        //No existe el usario
        $this->view->mostrarLogin("No existe el usuario");
      }
  }
}

 ?>
