<?php
    
    class LibroController
{
    private $libroService;

    public function __construct(ILibroService $libroService)
    {
        $this->libroService = $libroService;
    }

    public function getLibros()
    {
        return $this->libroService->getLibros();
    }

    public function getLibroById($id)
    {
        return $this->libroService->getLibroById($id);
    }

    public function addLibro($nombre)
    {
        $this->libroService->addLibro($nombre);
    }

    public function editLibro($id)
    {
        $this->libroService->editLibro($id);
    }

    public function deleteLibro($id)
    {
        $this->libroService->deleteLibro($id);
    }
}