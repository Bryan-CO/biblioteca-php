<?php
class Subgenero implements JsonSerializable
{
  private $idSubgenero;
  private $nombre;
  private $estado;

  public function __construct($idSubgenero, $nombre)
  {
    $this->idSubgenero = $idSubgenero;
    $this->nombre = $nombre;
  }
  public function getIdSubgenero()
  {
    return $this->idSubgenero;
  }

  public function setIdSubgenero($idSubgenero)
  {
    $this->idSubgenero = $idSubgenero;
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