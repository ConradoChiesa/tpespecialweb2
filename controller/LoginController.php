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

  function logout() {
    session_start();
    session_destroy();
    header(LOGIN);
  }

  function verificarLogin() {
      $usuario = $_POST["usuarioId"];
      $pass = $_POST["passwordId"];
      $dbUser = $this->model->getUsuario($usuario);
      if(isset($dbUser) && sizeof($dbUser) > 0) {
          if (password_verify($pass, $dbUser[0]["password"])) {
            session_start();
            $_SESSION["User"] = $usuario;
            var_dump($dbUser[0]["esadmin"]);
            if (($dbUser[0]["esadmin"]) == 1) {
              header(HOMEADMIN);
            } else {
              header(HOMEUSER);
            }

              // header(HOME);
          } else {
            $this->view->mostrarLogin("Contraseña incorrecta");
          }
      } else {
        //No existe el usario
        $this->view->mostrarLogin("No existe el usario");
      }
  }
}

 ?>
