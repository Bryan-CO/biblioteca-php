<?php

require_once CONTAINER . "LibroContainer.php";

Router::GET('/libros', fn() => getLibroController()->getLibros());


Router::GET('/libros/:id', fn (Request $req) => getLibroController()->getLibroById($req));