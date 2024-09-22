<?php

    require_once CONTAINER . 'IdiomaContainer.php';

    Router::GET('/idiomas', fn() => getIdiomaController()->getIdiomas());
    Router::POST('/idiomas', fn(Request $req) => getIdiomaController()->addIdioma($req));