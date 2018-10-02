<?php

class RegisterModel
{
  private $db;

  function __construct()
  {
    $this->db = $this->Connect();
  }

  function Connect(){
    return new PDO('mysql:host=localhost;'
    .'dbname=personajes;charset=utf8'
    , 'root', '');
  }

  function GetUsuario(){

      $sentencia = $this->db->prepare( "select * from usuarios");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function InsertarUsuario($nombre, $user, $email, $pass){

    $sentencia = $this->db->prepare("INSERT INTO usuario(nombre, pass) VALUES(?,?)");
    $sentencia->execute(array($nombre, $user, $email, $pass));
  }

}


 ?>
