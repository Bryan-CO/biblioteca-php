<?php
    interface ISubgeneroService{
        public function getSubgeneros();
        public function addSubgenero($nombre);
        public function editSubgenero(Subgenero $subgenero);
        public function deleteSubgenero($id);
    }