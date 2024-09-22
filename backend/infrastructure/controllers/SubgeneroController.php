<?php

class SubgeneroController
{
    private $subgeneroService;

    public function __construct(ISubgeneroService $subgeneroService)
    {
        $this->subgeneroService = $subgeneroService;
    }


    public function getSubgeneros()
    {
        ResponseModel::success($this->subgeneroService->getSubgeneros());
    }

    public function addSubgenero(Request $req)
    {
        $nombre = $req->body['nombre'];
        ResponseModel::success($this->subgeneroService->addSubgenero($nombre));
    }

    public function editSubgenero($id)
    {
        $this->subgeneroService->editSubgenero($id);
    }

    public function deleteSubgenero($id)
    {
        $this->subgeneroService->deleteSubgenero($id);
    }
}
