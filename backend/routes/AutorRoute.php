<?php
    require_once BASE_PATH . "infrastructure/containers/AutorContainer.php";

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
