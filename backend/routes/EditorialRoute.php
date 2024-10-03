<?php
require_once CONTAINER . 'EditorialContainer.php';

Router::GET('/editoriales', fn() => getEditorialController()->getEditoriales());
Router::POST('/editoriales', fn(Request $req) => getEditorialController()->addEditorial($req));
Router::PUT('/editoriales/:id', fn(Request $req) => getEditorialController()->editEditorial($req));
Router::DELETE('/editoriales/:id', fn(Request $req) => getEditorialController()->deleteEditorial($req));
