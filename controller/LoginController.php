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

  function login(){

    $this->view->mostrarLogin();

  }

  function logout(){
    session_start();
    session_destroy();
    header(LOGIN);
  }

  function verificarLogin(){
      $usuario = $_POST["usuarioId"];
      $pass = $_POST["passwordId"];
      $dbUser = $this->model->getUser($usuario);

      if(isset($dbUser) && sizeof($dbUser) > 0){
          if (password_verify($pass, $dbUser[0]["password"])){
              //mostrar lista de tareas
              session_start();
              $_SESSION["User"] = $usuario;
              header(HOME);
          }else{
            $this->view->mostrarLogin("Contraseña incorrecta");

          }
      }else{
        //No existe el usario
        $this->view->mostrarLogin("No existe el usario");
      }

  }

}

 ?>
