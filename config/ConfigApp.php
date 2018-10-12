<?php

define('HOME', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
define('LOGIN', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/login');
define('LOGOUT', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/logout');
define('HOMEADMIN', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]. '/admin'));
define('HOMEUSER', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]. '/homeuser'));

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
      'admin'=> 'LoginController#loginAdmin',
      'homeuser'=> 'personajesController#homeuser',
      'logout'=> 'LoginController#logout',
      'crear'=> 'personajesController#Crear',
      'modificarDatos'=> 'RegisterController#ModificarDatos',
      'mostrarUsuarios'=> 'UsuarioController#MostrarUsuario',
      'agregarPersonaje'=> 'personajesController#InsertPersonaje',
      'agregarHecho'=> 'TareasController#InsertHecho',
      'borrarHecho'=> 'TareasController#BorrarHecho',
      'borrarPersonaje'=> 'TareasController#BorrarPersonaje',
      'editarHecho'=> 'TareasController#EditarHecho',
      'modificarHecho'=>'TareasController#ModificarHecho',
      'editarPersonaje'=>'TareasController#EditarPersonaje',
      'modificarPerso'=>'TareasController#ModificarPerso',
      'guardarEditar'=> 'TareasController#GuardarEditarTarea',
    ];

}

 ?>
