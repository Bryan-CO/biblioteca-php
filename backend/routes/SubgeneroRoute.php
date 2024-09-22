<?php

    require_once CONTAINER . 'SubgeneroContainer.php';

    Router::GET('/subgeneros', function(Request $req){
        $subgeneros = getSubgeneroController()->getSubgeneros();
        ResponseModel::success($subgeneros);
    });