<?php
    interface IAutorService{
        public function getAutores();
        public function addAutor(Autor $autor);
        public function editAutor(Autor $autor);
        public function deleteAutor($id);
    }