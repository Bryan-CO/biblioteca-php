<?php
    function pgToAutores($autores){
        $autoresMapped = [];
        foreach($autores as $au){
            $autor = new Autor(
                $au["idautor"],
                $au["nombre"]
            );
            array_push($autoresMapped, $autor);
        }
        
        return $autoresMapped;
    }