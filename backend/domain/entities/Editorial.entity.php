<?php
class Editorial implements JsonSerializable
{
  private $idEditorial;
  private $nombre;
  private $estado;
  public function __construct($idEditorial, $nombre, $estado = true)
  {
    $this->idEditorial = $idEditorial;
    $this->nombre = $nombre;
    $this->estado = $estado;
  }

  public function getIdEditoral()
  {
    return $this->idEditorial;
  }
  public function setIdEditoral($idEditorial)
  {
    $this->idEditorial = $idEditorial;
  }
  public function getNombre()
  {
    return $this->nombre;
  }
  public function setNombre($nombre)
  {
    $this->nombre = $nombre;
  }
  public function getestado()
  {
    return $this->estado;
  }
  public function setestado($estado)
  {
    $this->estado = $estado;
  }
  public function jsonSerialize(): mixed
  {
    return get_object_vars($this);
  }
}
