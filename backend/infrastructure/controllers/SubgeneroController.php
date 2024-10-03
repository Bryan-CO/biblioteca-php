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
    try {
      $nombre = $req->body['nombre'];
      ResponseModel::success($this->subgeneroService->addSubgenero($nombre));
    } catch (Exception $e) {
      ResponseModel::error($e->getMessage());
    }
  }

  public function editSubgenero(Request $req)
  {
    $id = $req->params['id'];
    $nombre = $req->body['nombre'];
    $subgenero = new Subgenero($id, $nombre);
    ResponseModel::success($this->subgeneroService->editSubgenero($subgenero));
  }

  public function deleteSubgenero(Request $req)
  {
    $id = $req->params['id'];
    $this->subgeneroService->deleteSubgenero($id);
    ResponseModel::success(null, 200, 'ok');
  }
}
