<?php
interface IEditorialRepository
{
  public function getAll();
  public function add($nombre);
  public function edit(Editorial $editorial);
  public function delete($id);
}
