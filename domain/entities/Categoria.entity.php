<?php
class Categoria
{
    private $idCategoria;
    private $nombre;
    private $estado;

    public function __construct($idCategoria, $nombre) {
        $this->idCategoria = $idCategoria;
        $this->nombre = $nombre;
    }
    public function getIdCategoria()
    {
        return $this->idCategoria;
    }

    public function setIdCategoria($idCategoria)
    {
        $this->idCategoria = $idCategoria;
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