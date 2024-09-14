<?php
interface IIdiomaRepository
{
    public function getAll();
    public function add(Idioma $idioma);
    public function edit(Idioma $idioma);
    public function delete($id);
}