<?php


class personajesModel
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

  function GetHecho($id) {
    //select hecho from hechos where id_hecho=35
    $sentencia = $this->db->prepare("select * from hechos where id_hecho=?");
    $sentencia->execute(array("$id"));
    $resultado = $sentencia->fetchColumn(2);
    return $resultado;
  }

  function GetHechos() {
      $sentencia = $this->db->prepare("select * from hechos
        inner join personaje
        on hechos.id_personaje = personaje.id_personaje");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function GetPersonajes() {
      $sentencia = $this->db->prepare("select * from personaje");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function GetPersonaje($id) {
      $sentencia = $this->db->prepare("select * from personaje where id_personaje=?");
      $sentencia->execute(array("$id"));
      //$resultado = $sentencia->fetchColumn(2);
      return $sentencia->fetch(PDO::FETCH_ASSOC);
  }

  function EliminarHecho($id) {
    $sentencia = $this->db->prepare("DELETE FROM hechos WHERE id_hecho=?");
    $sentencia->execute(array("$id"));
    }

  function InsertarTarea($nombre,$nacimiento,$actividad) {
    $sentencia = $this->db->prepare("INSERT INTO personaje(nombre, nacimiento, actividad) VALUES(?,?,?)");
    $sentencia->execute(array($nombre,$nacimiento,$actividad));
  }

  function InsertarHecho($perso,$hecho) {
    $sentencia = $this->db->prepare("INSERT INTO hechos(id_personaje, hecho) VALUES(?,?)");
    $sentencia->execute(array($perso,$hecho));
  }

  function EliminarPersonaje($id) {
    $sentencia = $this->db->prepare("DELETE FROM personaje WHERE id_personaje=?");
    $sentencia->execute(array("$id"));
  }

  function ActualizarHecho($Hecho,$Id) {
    $sentencia = $this->db->prepare("UPDATE hechos SET hecho=? WHERE id_hecho=?");
    $sentencia->execute(array($Hecho,$Id));
  }

  function ActualizarPerso($nomPerso,$naciPerso,$actiPerso,$idPerso) {
    $sentencia = $this->db->prepare("UPDATE personaje SET nombre = ?, nacimiento = ?, actividad = ? WHERE id_personaje = ?");
    $sentencia->execute(array($nomPerso,$naciPerso,$actiPerso,$idPerso));
  }

}

 ?>
