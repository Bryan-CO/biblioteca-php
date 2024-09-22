<?php

    require_once CONTAINER . 'IdiomaContainer.php';

    Router::GET('/idiomas', function(Request $req){
        $idiomas = getIdiomaController()->getIdiomas();
        ResponseModel::success($idiomas);
    });