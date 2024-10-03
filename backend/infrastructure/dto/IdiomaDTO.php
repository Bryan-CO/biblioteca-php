<?php


class IdiomaDTO{
      private $idIdioma;
      private $nombre;

	public function __construct() {

		
	}

	public function getIdIdioma() {
		return $this->idIdioma;
	}

	public function setIdIdioma($value) {
		$this->idIdioma = $value;
	}

	public function getNombre() {
		return $this->nombre;
	}

	public function setNombre($value) {
		$this->nombre = $value;
	}
}