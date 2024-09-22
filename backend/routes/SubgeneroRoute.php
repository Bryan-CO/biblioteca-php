<?php

    require_once CONTAINER . 'SubgeneroContainer.php';

    Router::GET('/subgeneros', fn() => getSubgeneroController()->getSubgeneros());
    Router::POST('/subgeneros', fn(Request $req) => getSubgeneroController()->addSubgenero($req));