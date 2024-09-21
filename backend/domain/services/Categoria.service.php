<?php
    interface ICategoriaService{
        public function getCategorias();
        public function addCategoria($nombre);
        public function editCategoria(Categoria $categoria);
        public function deleteCategoria($id);
    }