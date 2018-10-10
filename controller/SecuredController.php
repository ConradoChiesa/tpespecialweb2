<?php

class SecuredController
{

  function __construct() {
    session_start();
    if(isset($_SESSION["User"])){
      if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) { //1800 son segundos y equivale a 30 minutos de logeo
        $this->logout(); // destruye la sesión, y vuelve al login
      }
        $_SESSION['LAST_ACTIVITY'] = time(); // actualiza el último instante de actividad
    } else {
      header(LOGIN);
    }
  }

  function logout(){
    session_start();
    session_destroy();
    header(LOGIN);
  }
}

 ?>
