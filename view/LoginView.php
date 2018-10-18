<?php
class LoginView
{
  private $Smarty;

  function __construct()
  {
    $this->Smarty = new Smarty();
  }

  function mostrarLogin($message = ''){
    $this->Smarty->assign('Message', $message);
    $this->Smarty->display('templates/login.tpl');
  }
  
  function Logearse(){
    $this->Smarty->display('templates/login.tpl');
  }

  function Logueado() {
    $Log = "true";
    $this->Smarty->assign('Log',$Log);
    $this->Smarty->display('templates/nav.tpl');
  }

}

 ?>
