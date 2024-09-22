<?php
    require_once CONTAINER . "AutorContainer.php";

    // Router::GET('/autores', function(){
    //     $autores = getAutorController()->getAutores();
    //     ResponseModel::success($autores);
    // });

    Router::GET('/autores', fn () => getAutorController()->getAutores());

    Router::POST('/autores', fn (Request $req) => getAutorController()->addAutor($req));
