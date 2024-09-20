<?php
    interface ILibroService{
        public function getLibros();
        public function getLibroById($id);
        public function addLibro(Libro $nombre);
        public function editLibro(Libro $libro);
        public function deleteLibro($id);
    }