<?php

require_once  "./view/LoginView.php";
require_once  "./model/UsuarioModel.php";


class LoginController
{
  private $view;
  private $model;

  function __construct()
  {
    $this->view = new LoginView();
    $this->model = new UsuarioModel();
  }


  function VerificarLogin() {
      if ( ($_POST["email"] == "") || ($_POST["pass"] == "")) {
        $this->view->mostrarLogin("Ingresar todos los datos solicitados, de forma correcta.");
      } else {
        $email = $_POST["email"];
        $pass = $_POST["pass"];
        $dbUser = $this->model->GetUser($email);
        if(isset($dbUser)){
            if (password_verify($pass, $dbUser[0]["pass"])){
                session_start();
                $_SESSION["user"] = $email;
                header(HOME);
                die();
            } else {
              $this->view->mostrarLogin("Ingresar los datos correctos.");
            }
          } else {
              $this->view->mostrarLogin("Ingresar la cuenta de correo correcta.");
          }
        }
    }

    function logearse(){
      $this->view->mostrarLogin();
    }

   function logout() {
    session_start();
    session_destroy();
    header(HOME);
    die();
  }

}

 ?>
