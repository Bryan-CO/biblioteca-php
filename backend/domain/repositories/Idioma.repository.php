<?php
interface IIdiomaRepository
{
    public function getAll();
    public function add($nombre);
    public function edit(Idioma $idioma);
    public function delete($id);
}