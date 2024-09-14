<?php
interface IEditorialRepository
{
  public function getAll();
  public function add(Editorial $editorial);
  public function edit(Editorial $editorial);
  public function delete($id);
}
