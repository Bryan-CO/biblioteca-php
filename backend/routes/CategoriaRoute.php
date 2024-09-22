<?php
    require_once CONTAINER . 'CategoriaContainer.php';

    Router::GET('/categorias', fn() => getCategoriaController()->getCategorias());
    Router::POST('/categorias', fn (Request $req) => getCategoriaController()->addCategoria($req));