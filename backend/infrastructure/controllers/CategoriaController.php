<?php

class CategoriaController
{
    private $categoriaService;

    public function __construct(ICategoriaService $categoriaService)
    {
        $this->categoriaService = $categoriaService;
    }


    public function getCategorias()
    {
        return $this->categoriaService->getCategorias();
    }

    public function addCategoria($nombre)
    {
        $this->categoriaService->addCategoria($nombre);
    }

    public function editCategoria($id)
    {
        $this->categoriaService->editCategoria($id);
    }

    public function deleteCategoria($id)
    {
        $this->categoriaService->deleteCategoria($id);
    }
}
