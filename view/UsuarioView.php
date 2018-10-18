<?php
require_once ('libs/Smarty.class.php');
/**
 *
 */
class UsuarioView
{

  private $Smarty;

  function __construct()
  {
    $this->Smarty = new Smarty();
  }

	function MostrarRegistrarse() {
    $this->Smarty->display('templates/registrarse.tpl');
	}



}

 ?>
