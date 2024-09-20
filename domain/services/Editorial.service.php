<?php
    interface IEditorialService{
        public function getEditoriales();
        public function addEditorial($nombre);
        public function editEditorial(Editorial $editorial);
        public function deleteEditorial($id);
    }