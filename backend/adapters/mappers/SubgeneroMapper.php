<?php
    function pgToSubgeneros($subgeneros){
        $subgenerosMapped = [];
        foreach($subgeneros as $sub){
            $subgenero = new Subgenero(
                idSubgenero: $sub["idsubgenero"],
                nombre: $sub["nombre"]
            );
            array_push($subgenerosMapped, $subgenero);
        }
        
        return $subgenerosMapped;
    }