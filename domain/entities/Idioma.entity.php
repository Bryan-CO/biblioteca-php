<?php
class Idioma implements JsonSerializable
{
  private $idIdioma;
  private $nombre;
  private $estado;

  public function __construct($idIdioma, $nombre)
  {
    $this->idIdioma = $idIdioma;
    $this->nombre = $nombre;
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

  public function setnomgetNombre($nombre)
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
