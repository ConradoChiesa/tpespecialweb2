<?php


class TareasModel
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

  function GetTareas(){

      $sentencia = $this->db->prepare( "select * from personaje");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function GetHechos(){

      $sentencia = $this->db->prepare( "select * from hechos");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function InsertarTarea($nombre,$nacimiento,$actividad){

    $sentencia = $this->db->prepare("INSERT INTO personaje(nombre, nacimiento, actividad) VALUES(?,?,?)");
    $sentencia->execute(array($nombre,$nacimiento,$actividad));
  }

  function InsertarHecho($perso,$hecho){

    $sentencia = $this->db->prepare("INSERT INTO hechos(id_personaje, hecho) VALUES(?,?)");
    $sentencia->execute(array($perso,$hecho));
  }



  function BorrarTarea($idTarea){

    $sentencia = $this->db->prepare( "delete from tarea where id=?");
    $sentencia->execute(array($idTarea));
  }

}


 ?>
