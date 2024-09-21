<?php
    interface ILibroRepository{
        public function getAll();
        public function getById($id);
        public function add(Libro $libro);
        public function edit(Libro $libro);
        public function delete($id);
    }