<?php
class Subgenero
{
  private $idSubgenero;
  private $nombre;
  private $estado;


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
}