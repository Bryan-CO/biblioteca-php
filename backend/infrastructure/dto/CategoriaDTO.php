<?php

class CategoriaDTO{
      private $idCategoria;
      private $nombre;
    

	public function __construct() {

		
	}

	public function getIdCategoria() {
		return $this->idCategoria;
	}

	public function setIdCategoria($value) {
		$this->idCategoria = $value;
	}

	public function getNombre() {
		return $this->nombre;
	}

	public function setNombre($value) {
		$this->nombre = $value;
	}
}