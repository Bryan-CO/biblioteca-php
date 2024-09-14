<?php
interface ICategoriaRepository
{
  public function getAll();
  public function add(Categoria $categoria);
  public function edit(Categoria $categoria);
  public function delete($id);
}