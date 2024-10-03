<?php
require_once CONTAINER . 'CategoriaContainer.php';

Router::GET('/categorias', fn() => getCategoriaController()->getCategorias());
Router::POST('/categorias', fn(Request $req) => getCategoriaController()->addCategoria($req));
Router::PUT('/categorias/:id', fn(Request $req) => getCategoriaController()->editCategoria($req));
Router::DELETE('/categorias/:id', fn(Request $req) => getCategoriaController()->deleteCategoria($req));
