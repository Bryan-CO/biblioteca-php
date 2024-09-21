<?php
interface ICategoriaRepository
{
  public function getAll();
  public function add($nombre);
  public function edit(Categoria $categoria);
  public function delete($id);
}