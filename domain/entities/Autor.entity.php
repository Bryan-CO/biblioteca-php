<?php
class Autor
{
  private $idAutor;
  private $nombre;
  private $estado;

  public function getIdAutor()
  {
    return $this->idAutor;
  }

  public function setIdAutor($idAutor)
  {
    $this->idAutor = $idAutor;
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
}