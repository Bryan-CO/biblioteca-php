<?php
    function pgToCategorias($categorias){
        $categoriasMapped = [];
        foreach($categorias as $cat){
            $categoria = new Categoria(
                $cat["idcategoria"],
                $cat["nombre"]
            );
            array_push($categoriasMapped, $categoria);
        }
        
        return $categoriasMapped;
    }