<?php

define('HOME', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/');
define('LOGIN', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/login');
define('LOGOUT', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/logout');
define('REGISTRARSE', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/registrarse');

class ConfigApp
{
    public static $ACTION = 'action'; //editar, borrar, etc
    public static $PARAMS = 'params'; //3, 5, etc
    public static $ACTIONS = [
      ''=> 'NavigationController#Home',
      'home'=>'NavigationController#Home',
      'crear'=> 'TareasController#Crear',
      'registrarse'=>'NavigationController#Registrarse',
      'agregarUsuario'=>'UsuarioController#AgregarUsuario',
      'login'=> 'LoginController#Login',
      'registro'=> 'UsuarioController#register',
      'verificarLogin'=>'LoginController#VerificarLogin',
      'agregarPersonaje'=> 'TareasController#InsertPersonaje',
      'agregarHecho'=> 'TareasController#InsertHecho',
      'borrarHecho'=> 'TareasController#BorrarHecho',
      'borrarPersonaje'=> 'TareasController#BorrarPersonaje',
      'editarHecho'=> 'TareasController#EditarHecho',
      'modificarHecho'=>'TareasController#ModificarHecho',
      'editarPersonaje'=>'TareasController#EditarPersonaje',
      'modificarPerso'=>'TareasController#ModificarPerso',
      'guardarEditar'=> 'TareasController#GuardarEditarTarea',
      'mostrarUsuarios'=> 'UsuarioController#MostrarUsuario',
      'logout'=> 'LoginController#logout',
      'personajes'=>'NavigationController#Personajes',
      'hechosDelPersonaje'=>'NavigationController#HechosDelPersonaje',
      'editar'=>'TareasController#Edicion'
    ];

}


 ?>
