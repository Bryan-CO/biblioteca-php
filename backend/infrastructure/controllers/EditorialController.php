<?php

class EditorialController
{
    private $editorialService;

    public function __construct(IEditorialService $editorialService)
    {
        $this->editorialService = $editorialService;
    }

    
    public function getEditoriales()
    {
        return $this->editorialService->getEditoriales();
    }

    public function addEditorial($nombre)
    {
        $this->editorialService->addEditorial($nombre);
    }

    public function editEditorial($id)
    {
        $this->editorialService->editEditorial($id);
    }

    public function deleteEditorial($id)
    {
        $this->editorialService->deleteEditorial($id);
    }
}
