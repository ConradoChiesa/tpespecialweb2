<?php


class UsuarioModel
{
  private $db;

  function __construct() {
    $this->db = $this->Connect();
  }

  function Connect() {
    return new PDO('mysql:host=localhost;'
    .'dbname=db_personajes;charset=utf8'
    , 'root', '');
  }

    function GetUser($email) {
      $sentencia = $this->db->prepare("select * from usuarios where email=? limit 1");
      $sentencia->execute(array($email));
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function InsertarUsuario($email, $pass) {
    $sentencia = $this->db->prepare("INSERT INTO usuarios(email, pass) VALUES(?,?)");
    $sentencia->execute(array($email,$pass));
  }

}

 ?>
