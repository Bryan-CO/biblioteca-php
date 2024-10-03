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
    try {
      $name = $req->body['nombre'];
      ResponseModel::success($this->editorialService->addEditorial($name));
    } catch (Exception $e) {
      ResponseModel::error($e->getMessage());
    }
  }

  public function editEditorial(Request $req)
  {
    try {
      $id = $req->params["id"];
      $nombre = $req->body['nombre'];
      $editorial = new Editorial($id, $nombre);
      ResponseModel::success($this->editorialService->editEditorial($editorial));
    } catch (Exception $e) {
      ResponseModel::error($e->getMessage());
    }
  }

  public function deleteEditorial(Request $req)
  {
    try {
      $id = $req->params["id"];
      $this->editorialService->deleteEditorial($id);
      ResponseModel::success(null, 200, "ok");
    } catch (Exception $e) {
      ResponseModel::error($e->getMessage());
    }
  }
}
