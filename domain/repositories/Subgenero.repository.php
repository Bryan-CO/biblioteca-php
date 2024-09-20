<?php
interface ISubgeneroRepository
{
    public function getAll();
    public function add($nombre);
    public function edit(Subgenero $subgenero);
    public function delete($id);
}