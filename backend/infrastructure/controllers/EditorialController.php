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
        ResponseModel::success($this->editorialService->getEditoriales());
    }

    public function addEditorial(Request $req)
    {
        $name = $req->body['nombre'];
        ResponseModel::success($this->editorialService->addEditorial($name));
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
