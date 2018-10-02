<?php

require_once  "./view/RegisterView.php";
require_once  "./model/RegisterModel.php";


class RegisterController
{
  private $view;
  private $model;
  private $Titulo;

  function __construct()
  {
    $this->view = new RegisterView();
    $this->model = new RegisterModel();
    $this->Titulo = "Registro de usuarios";
  }

  function register(){

    $this->view->mostrarRegistro();

  }


}

 ?>
