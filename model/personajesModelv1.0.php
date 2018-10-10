<?php
/**
 *
 */
class personajesModel
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

  function Getpersonajes() {
      $sentencia = $this->db->prepare( "select * from personaje");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function Insertarpersonaje($titulo,$descripcion,$completada) {
    $sentencia = $this->db->prepare("INSERT INTO personaje(titulo, descripcion, completada) VALUES(?,?,?)");
    $sentencia->execute(array($titulo,$descripcion,$completada));
  }

  function Borrarpersonaje($idpersonaje) {
    $sentencia = $this->db->prepare( "delete from personaje where id=?");
    $sentencia->execute(array($idpersonaje));
  }

  function Completarpersonaje($id_personaje) {
    $sentencia = $this->db->prepare( "update personaje set completada=1 where id=?");
    $sentencia->execute(array($id_personaje));
  }
}
?>
