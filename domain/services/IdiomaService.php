<?php
    interface IIdiomaService{
        public function getIdiomas();
        public function addIdioma($nombre);
        public function editIdioma(Idioma $idioma);
        public function deleteIdioma($id);
    }