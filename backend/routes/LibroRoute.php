<?php

require_once CONTAINER . "LibroContainer.php";

Router::GET('/libros', fn() => getLibroController()->getLibros());
Router::GET('/libros/:id', fn (Request $req) => getLibroController()->getLibroById($req));
Router::POST('/libros', fn(Request $req) => getLibroController()->addLibro($req));
