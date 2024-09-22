<?php

class IdiomaController
{
    private $idiomaService;

    public function __construct(IIdiomaService $idiomaService)
    {
        $this->idiomaService = $idiomaService;
    }
    
    public function getIdiomas()
    {
        ResponseModel::success($this->idiomaService->getIdiomas());
    }

    public function addIdioma($nombre)
    {
        $this->idiomaService->addIdioma($nombre);
    }

    public function editIdioma($id)
    {
        $this->idiomaService->editIdioma($id);
    }

    public function deleteIdioma($id)
    {
        $this->idiomaService->deleteIdioma($id);
    }
}
