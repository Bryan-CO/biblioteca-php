<?php

require_once CONTAINER . "LibroContainer.php";

Router::GET('/libros', function ($req) {
    $libros = getController()->getLibros();
    ResponseModel::success($libros);
});


Router::GET('/libros/:id', function (Request $req) {
    $libro = getController()->getLibroById($req->params['id']);
    ResponseModel::success($libro);
});