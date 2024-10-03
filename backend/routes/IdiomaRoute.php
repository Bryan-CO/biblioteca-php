<?php

require_once CONTAINER . 'IdiomaContainer.php';

Router::GET('/idiomas', fn() => getIdiomaController()->getIdiomas());
Router::POST('/idiomas', fn(Request $req) => getIdiomaController()->addIdioma($req));
Router::PUT('/idiomas/:id', fn(Request $req) => getIdiomaController()->editIdioma($req));
Router::DELETE('/idiomas/:id', fn(Request $req) => getIdiomaController()->deleteIdioma($req));
