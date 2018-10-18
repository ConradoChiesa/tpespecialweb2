<?php

define('HOME', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/');
define('LOGEARSE', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/logearse');
define('LOGOUT', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/logout');
define('REGISTRARSE', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/registrarse');
define('EDITAR', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/editar');
define('PERSONAJES', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/personajes');


class ConfigApp
{
    public static $ACTION = 'action'; //editar, borrar, etc
    public static $PARAMS = 'params'; //3, 5, etc
    public static $ACTIONS = [
      ''=> 'NavigationController#Home',
      'crear'=> 'TareasController#Crear',
      'registrarse'=>'NavigationController#Registrarse',
      'agregarUsuario'=>'UsuarioController#AgregarUsuario',
      'logearse'=> 'LoginController#Logearse',
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
      'editar'=>'TareasController#Edicion',
      'mafalda'=>'NavigationController#Mafalda',
      'chapulin'=>'NavigationController#Chapulin',
      'sandokan'=>'NavigationController#Sandokan',
      'superagente'=>'NavigationController#Superagente'
    ];

}


 ?>
