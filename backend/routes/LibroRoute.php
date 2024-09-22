<?php

require_once CONTAINER . "LibroContainer.php";

Router::GET('/libro', function ($req) {
    $libros = getController()->getLibros();
    ResponseModel::success($libros);
});


Router::GET('/libro/:id', function ($req) {
    $libro = getController()->getLibroById($req->params['id']);
    ResponseModel::success($libro);
});