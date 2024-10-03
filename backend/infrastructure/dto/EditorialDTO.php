<?php

class EditorialDTO{
      private $idEditorial;
      private $nombre;

	public function __construct() {

		
	}

	public function getIdEditorial() {
		return $this->idEditorial;
	}

	public function setIdEditorial($value) {
		$this->idEditorial = $value;
	}

	public function getNombre() {
		return $this->nombre;
	}

	public function setNombre($value) {
		$this->nombre = $value;
	}
}