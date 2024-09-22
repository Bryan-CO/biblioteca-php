<?php
require_once ENTITIES . 'Libro.entity.php';
require_once ENTITIES . 'Autor.entity.php';
require_once ENTITIES . 'Categoria.entity.php';
require_once ENTITIES . 'Editorial.entity.php';
require_once ENTITIES . 'Idioma.entity.php';
require_once ENTITIES . 'Subgenero.entity.php';
function pgToLibro($libros)
{
    $librosMapped = [];
    foreach ($libros as $libro) {
        $autor = new Autor(
            $libro["idautor"],
            $libro["autor"]
        );
        $idioma = new Idioma(
            $libro["ididioma"],
            $libro["idioma"]
        );
        $editorial = new Editorial(
            $libro["ideditorial"],
            $libro["editorial"]
        );
        $categoria = new Categoria(
            $libro["idcategoria"],
            $libro["categoria"]
        );
        $subgenero = new Subgenero(
            $libro["idsubgenero"],
            $libro["subgenero"]
        );
        $lib = new Libro(
            $libro["serialnumber"],
            $libro["nombre"],
            $libro["sinopsis"],
            $autor,
            $idioma,
            $editorial,
            $categoria,
            $subgenero,
            $libro["anio"],
            $libro["unidades"],
            $libro["cantpaginas"],
            $libro["urlimagen"],
            $libro["idlibro"]
        );
        array_push($librosMapped, $lib);
    }

    return $librosMapped;
}