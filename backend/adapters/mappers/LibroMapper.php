<?php
    function pgToLibro($libros){
        $librosMapped = [];
        foreach($libros as $libro){
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
                $libro["idlibro"],
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
                $libro["urlimagen"]
            );
            array_push($librosMapped, $lib);
        }
        
        return $librosMapped;
    }