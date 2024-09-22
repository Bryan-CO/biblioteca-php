<?php
require_once ENTITIES . 'Autor.entity.php';
require_once ENTITIES . 'Categoria.entity.php';
require_once ENTITIES . 'Editorial.entity.php';
require_once ENTITIES . 'Idioma.entity.php';
require_once ENTITIES . 'Subgenero.entity.php';
class Libro implements JsonSerializable
{
    private $idLibro;
    private $serialNumber;
    private $nombre;
    private $sinopsis;
    private Autor $autor;
    private Idioma $idioma;
    private Editorial $editorial;
    private Categoria $categoria;
    private Subgenero $subgenero;
    private $anio;
    private $unidades;
    private $cantPaginas;
    private $urlImagen;
    private $estado;

    public function __construct($idLibro, $serialNumber, $nombre, $sinopsis, Autor $autor, Idioma $idioma, Editorial $editorial, Categoria $categoria, Subgenero $subgenero, $anio, $unidades, $cantPaginas, $urlImagen, $estado = true)
    {
        $this->idLibro = $idLibro;
        $this->serialNumber = $serialNumber;
        $this->nombre = $nombre;
        $this->sinopsis = $sinopsis;
        $this->autor = $autor;
        $this->idioma = $idioma;
        $this->editorial = $editorial;
        $this->categoria = $categoria;
        $this->subgenero = $subgenero;
        $this->anio = $anio;
        $this->unidades = $unidades;
        $this->cantPaginas = $cantPaginas;
        $this->urlImagen = $urlImagen;
        $this->estado = $estado;
    }

    public function getIdLibro()
    {
        return $this->idLibro;
    }

    public function setIdLibro($idLibro)
    {
        $this->idLibro = $idLibro;
    }


    public function getSerialNumber()
    {
        return $this->serialNumber;
    }

    public function setSerialNumber($serialNumber)
    {
        $this->serialNumber = $serialNumber;
    }


    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }


    public function getSinopsis()
    {
        return $this->sinopsis;
    }

    public function setSinopsis($sinopsis)
    {
        $this->sinopsis = $sinopsis;
    }


    public function getAutor()
    {
        return $this->autor;
    }

    public function setAutor(Autor $autor)
    {
        $this->autor = $autor;
    }


    public function getIdioma()
    {
        return $this->idioma;
    }

    public function setIdioma(Idioma $idioma)
    {
        $this->idioma = $idioma;
    }


    public function getEditorial()
    {
        return $this->editorial;
    }

    public function setEditorial(Editorial $editorial)
    {
        $this->editorial = $editorial;
    }


    public function getCategoria()
    {
        return $this->categoria;
    }

    public function setCategoria(Categoria $categoria)
    {
        $this->categoria = $categoria;
    }


    public function getSubgenero()
    {
        return $this->subgenero;
    }

    public function setSubgenero(Subgenero $subgenero)
    {
        $this->subgenero = $subgenero;
    }


    public function getAnio()
    {
        return $this->anio;
    }

    public function setAnio($anio)
    {
        $this->anio = $anio;
    }


    public function getUnidades()
    {
        return $this->unidades;
    }

    public function setUnidades($unidades)
    {
        $this->unidades = $unidades;
    }

    public function getCantPaginas()
    {
        return $this->cantPaginas;
    }

    public function setCantPaginas($cantPaginas)
    {
        $this->cantPaginas = $cantPaginas;
    }

    public function getUrlImagen()
    {
        return $this->urlImagen;
    }

    public function setUrlImagen($urlImagen)
    {
        $this->urlImagen = $urlImagen;
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
