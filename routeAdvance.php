<?php

require_once "config/ConfigApp.php";
require_once "controller/TareasController.php";
require_once "controller/UsuarioController.php";
require_once "controller/LoginController.php";
require_once "controller/NavigationController.php";
require_once "controller/SecuredController.php";

if(isset($_GET['action'])){

    $urlData = parseURL($_GET['action']);

    $action = $urlData[ConfigApp::$ACTION];
    if(array_key_exists($action,ConfigApp::$ACTIONS)){
        $params = $urlData[ConfigApp::$PARAMS];
        $action = explode('#',ConfigApp::$ACTIONS[$action]);
                  //Array[0], que es accion en este caso, tengo TareasController
        $controller =  new $action[0]();
                 //y en la pos 1 tiene el metodo que necesito, ej editar
        $metodo = $action[1];

        if(isset($params) &&  $params != null){
            echo $controller->$metodo($params); //llamo a arreglos de parámetros
        }
        else{
            echo $controller->$metodo();
        }
    }else{
      $controller =  new TareasController();
      echo $controller->Home();
    }
}

function parseURL($url) {

  $urlExploded = explode('/', $url);
  $arrayReturn[ConfigApp::$ACTION] = $urlExploded[0];
  $arrayReturn[ConfigApp::$PARAMS] = isset($urlExploded[1]) ? array_slice($urlExploded,1) : null;
  return $arrayReturn;

}

 ?>
