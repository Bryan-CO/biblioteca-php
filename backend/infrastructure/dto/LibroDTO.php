<?php


class LibroDTO {
      private $idLibro;
      private $serialNumber;
      private $nombre;
      private AutorDTO $autor;
      private IdiomaDTO $idioma;
      private EditorialDTO $editorial;
      private CategoriaDTO $categoria;
      private SubgeneroDTO $subgenero;
      private $anio;
      private $unidades;
      private $cantpaginas;
      private $urlimagen;
      private $sinopsis;

	public function __construct() {

	
	}

	public function getIdLibro() {
		return $this->idLibro;
	}

	public function setIdLibro($value) {
		$this->idLibro = $value;
	}

	public function getSerialNumber() {
		return $this->serialNumber;
	}

	public function setSerialNumber($value) {
		$this->serialNumber = $value;
	}

	public function getNombre() {
		return $this->nombre;
	}

	public function setNombre($value) {
		$this->nombre = $value;
	}

	public function getAutor() : AutorDTO {
		return $this->autor;
	}

	public function setAutor(AutorDTO $value) {
		$this->autor = $value;
	}

	public function getIdioma() : IdiomaDTO {
		return $this->idioma;
	}

	public function setIdioma(IdiomaDTO $value) {
		$this->idioma = $value;
	}

	public function getEditorial() : EditorialDTO {
		return $this->editorial;
	}

	public function setEditorial(EditorialDTO $value) {
		$this->editorial = $value;
	}

	public function getCategoria() : CategoriaDTO {
		return $this->categoria;
	}

	public function setCategoria(CategoriaDTO $value) {
		$this->categoria = $value;
	}

	public function getSubgenero() : SubgeneroDTO {
		return $this->subgenero;
	}

	public function setSubgenero(SubgeneroDTO $value) {
		$this->subgenero = $value;
	}

	public function getAnio() {
		return $this->anio;
	}

	public function setAnio($value) {
		$this->anio = $value;
	}

	public function getUnidades() {
		return $this->unidades;
	}

	public function setUnidades($value) {
		$this->unidades = $value;
	}

	public function getCantpaginas() {
		return $this->cantpaginas;
	}

	public function setCantpaginas($value) {
		$this->cantpaginas = $value;
	}

	public function getUrlimagen() {
		return $this->urlimagen;
	}

	public function setUrlimagen($value) {
		$this->urlimagen = $value;
	}

	public function getSinopsis() {
		return $this->sinopsis;
	}

	public function setSinopsis($value) {
		$this->sinopsis = $value;
	}
}