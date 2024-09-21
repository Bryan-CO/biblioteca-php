<?php
interface IAutorRepository
{
    public function getAll();
    public function add($nombre);
    public function edit(Autor $autor);
    public function delete($id);
}