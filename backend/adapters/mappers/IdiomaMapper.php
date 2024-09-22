<?php
    function pgToIdiomas($idiomas){
        $idiomasMapped = [];
        foreach($idiomas as $idi){
            $idioma = new Idioma(
                $idi["ididioma"],
                $idi["nombre"]
            );
            array_push($idiomasMapped, $idioma);
        }
        
        return $idiomasMapped;
    }