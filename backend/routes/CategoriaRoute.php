<?php

    require_once CONTAINER . 'CategoriaContainer.php';

    Router::GET('/categorias', function(Request $req){
        $categorias = getCategoriaController()->getCategorias();
        ResponseModel::success($categorias);
    });