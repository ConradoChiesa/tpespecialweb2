<?php


class UsuarioModel
{
  private $db;

  function __construct()
  {
    $this->db = $this->Connect();
  }

  function Connect(){
    return new PDO('mysql:host=localhost;'
    .'dbname=db_personajes;charset=utf8'
    , 'root', '');
  }

  function GetUsuarios() {
      $sentencia = $this->db->prepare( "SELECT * FROM `usuarios`");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function GetUsuario($usuario) {
      $sentencia = $this->db->prepare( "SELECT * FROM `usuarios` WHERE usuario=?");
      $sentencia->execute(array($usuario));
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function InsertarUsuario($nombre, $usuario, $email, $password) {
    $sentencia = $this->db->prepare("INSERT INTO `usuarios`(`nombre`, `usuario`, `e-mail`, `password`) VALUES (?,?,?,?)");
    $sentencia->execute(array($nombre, $usuario, $email, $password));
  }

  function modificaUsuario($id_usuario, $nombre, $usuario, $email) { //UPDATE `usuarios` SET `id_usuario`=[value-1],`nombre`=[value-2],`usuario`=[value-3],`e-mail`=[value-4],`password`=[value-5],`esadmin`=[value-6] WHERE 1
    $sentencia = $this->db->prepare("UPDATE `usuarios` SET `id_usuario`, `nombre`, `usuario`, `e-mail`) VALUES (?,?,?,?) WHERE id_usuario=?") ;
    $sentencia->execute(array($id_usuario, $nombre, $usuario, $email));
  }


}


 ?>
