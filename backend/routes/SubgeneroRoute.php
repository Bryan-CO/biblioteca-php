<?php

require_once CONTAINER . 'SubgeneroContainer.php';

Router::GET('/subgeneros', fn() => getSubgeneroController()->getSubgeneros());
Router::POST('/subgeneros', fn(Request $req) => getSubgeneroController()->addSubgenero($req));
Router::PUT('/subgeneros/:id', fn(Request $req) => getSubgeneroController()->editSubgenero($req));
Router::DELETE('/subgeneros/:id', fn(Request $req) => getSubgeneroController()->deleteSubgenero($req));
