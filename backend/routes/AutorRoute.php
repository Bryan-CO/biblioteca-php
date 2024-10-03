<?php
require_once CONTAINER . 'AutorContainer.php';

Router::GET('/autores', fn() => getAutorController()->getAutores());
Router::POST('/autores', fn(Request $req) => getAutorController()->addAutor($req));
Router::PUT('/autores/:id', fn(Request $req) => getAutorController()->editAutor($req));
Router::DELETE('/autores/:id', fn(Request $req) => getAutorController()->deleteAutor($req));
