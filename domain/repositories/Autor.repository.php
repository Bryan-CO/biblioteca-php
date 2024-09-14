<?php
interface IAutorRepository
{
    public function getAll();
    public function add(Autor $autor);
    public function edit(Autor $autor);
    public function delete($id);
}