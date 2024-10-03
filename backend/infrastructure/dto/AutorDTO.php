<?php


 class AutorDto {

      private $idAutor;
      private $nombre;

	public function __construct() {

		
	}

	public function getIdAutor() {
		return $this->idAutor;
	}

	public function setIdAutor($value) {
		$this->idAutor = $value;
	}

	public function getNombre() {
		return $this->nombre;
	}

	public function setNombre($value) {
		$this->nombre = $value;
	}
}