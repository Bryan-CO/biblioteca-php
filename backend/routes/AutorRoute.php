<?php
    require_once CONTAINER . "AutorContainer.php";

    Router::GET('/autores', function(){
        $autores = getAutorController()->getAutores();
        ResponseModel::success($autores);
    });

    Router::POST('/autores', function(Request $req){
        $nombreAutor = $req->body['nombre'];
        try{
            $autorDevuelto = getAutorController()->addAutor($nombreAutor);
            ResponseModel::success($autorDevuelto);
        }
        catch(Exception $e){
            ResponseModel::success(null, 500, $e->getMessage());
        }
    });
