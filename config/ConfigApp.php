<?php

define('HOME', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
define('LOGIN', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/login');
define('LOGOUT', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/logout');

class ConfigApp {
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      ''=> 'personajesController#Home',
      'home'=> 'personajesController#Home',
      'borrar'=> 'personajesController#Borrarpersonaje',
      'completada'=> 'personajesController#Completarpersonaje',
      'login'=> 'LoginController#login',
      'registro'=> 'RegisterController#register',
      'verificarLogin'=> 'LoginController#verificarLogin',
    ];

}

 ?>
