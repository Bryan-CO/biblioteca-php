<?php
class Editorial
{
    private $idEditoral;
    private $nombre;
    private $estado;
    public function __construct()
    {
    }

    public function getIdEditoral()
    {
        return $this->idEditoral;
    }
    public function setIdEditoral($idEditoral)
    {
        $this->idEditoral = $idEditoral;
    }
    public function getNom()
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
}