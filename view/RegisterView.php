<?php
class RegisterView
{
  private $Smarty;

  function __construct() {
    $this->Smarty = new Smarty();
  }

  function mostrarRegistro($message = '') {
    $this->Smarty->assign('Titulo',"Registro de Usuarios"); // El 'Titulo' del assign puede ser cualquier valor
    $this->Smarty->assign('Message',$message); // El 'Titulo' del assign puede ser cualquier valor
    $this->Smarty->display('templates/registro.tpl');
  }

  function modificarDatos($message = '') {
    $this->Smarty->assign('Titulo',"Modificación Datos de Usuarios");
    $this->Smarty->assign('Message',$message);
    $this->Smarty->display('templates/modificarUsuario.tpl');
  }

  // function usuarioModificado($message='') {
  //   $this->Smarty->assign('Titulo',"Modificación Datos de Usuarios");
  //   $this->Smarty->assign('Message',$message);
  //   $this->Smarty->display('templates/modificarUsuario.tpl');
  // }
}

 ?>
