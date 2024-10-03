<?php

class AutorController
{
  private $autorService;

  public function __construct(IAutorService $autorService)
  {
    $this->autorService = $autorService;
  }

  public function getAutores()
  {
    ResponseModel::success($this->autorService->getAutores());
  }

  public function addAutor(Request $req)
  {
    try {
      $nombre = $req->body['nombre'];
      ResponseModel::success($this->autorService->addAutor($nombre));
    } catch (Exception $e) {
      ResponseModel::error($e->getMessage());
    }
  }

  public function editAutor(Request $req)
  {
    try {
      $id = $req->params["id"];
      $nombre = $req->body['nombre'];
      $autor = new Autor($id, $nombre);
      ResponseModel::success($this->autorService->editAutor($autor));
    } catch (Exception $e) {
      ResponseModel::error($e->getMessage());
    }
  }

  public function deleteAutor(Request $req)
  {
    try {
      $id = $req->params["id"];
      $this->autorService->deleteAutor($id);
      ResponseModel::success(null, 200, "ok");
    } catch (Exception $e) {
      ResponseModel::error($e->getMessage());
    }
  }
}
