<?php

class UsuarioModel
{
  private $db;

  function __construct() {
    $this->db = $this->Connect();
  }

  function Connect() {
    return new PDO('mysql:host=localhost;'
    .'dbname=personajes;charset=utf8'
    , 'root', '');
  }

  function GetUsuarios() {
      $sentencia = $this->db->prepare( "select * from usuarios");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function GetUser($user) {
      $sentencia = $this->db->prepare( "select * from usuarios where usuario=? limit 1");
      $sentencia->execute(array($user));
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function InsertarUsuario($nombre, $usuario, $email, $password) {
    $sentencia = $this->db->prepare("INSERT INTO `usuarios`(`nombre`, `usuario`, `E-mail`, `password`) VALUES (?,?,?,?)");
    $sentencia->execute(array($nombre, $usuario, $email, $password));
  }

}


 ?>
