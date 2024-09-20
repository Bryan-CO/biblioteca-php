<?php
    interface IAutorService{
        public function getAutores();
        public function addAutor($nombre);
        public function editAutor(Autor $autor);
        public function deleteAutor($id);
    }