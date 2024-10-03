<?php
class Idioma implements JsonSerializable
{
  private $idIdioma;
  private $nombre;
  private $estado;

  public function __construct($idIdioma, $nombre, $estado = true)
  {
    $this->idIdioma = $idIdioma;
    $this->nombre = $nombre;
    $this->estado = $estado;
  }
  public function getIdIdioma()
  {
    return $this->idIdioma;
  }

  public function setIdIdioma($idIdIdioma)
  {
    $this->idIdioma = $idIdIdioma;
  }

  public function getNombre()
  {
    return $this->nombre;
  }

  public function setNombre($nombre)
  {
    $this->nombre = $nombre;
  }

  public function getEstado()
  {
    return $this->estado;
  }

  public function setEstado($estado)
  {
    $this->estado = $estado;
  }
  public function jsonSerialize(): mixed
  {
    return get_object_vars($this);
  }
}
