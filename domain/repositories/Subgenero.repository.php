<?php
interface ISubgeneroRepository
{
    public function getAll();
    public function add(Subgenero $subgenero);
    public function edit(Subgenero $subgenero);
    public function delete($id);
}