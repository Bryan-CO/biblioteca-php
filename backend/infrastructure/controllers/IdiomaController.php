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

  public function addIdioma(Request $req)
  {
    try {
      $nombre = $req->body['nombre'];
      ResponseModel::success($this->idiomaService->addIdioma($nombre));
    } catch (Exception $e) {
      ResponseModel::error($e->getMessage());
    }
  }

  public function editIdioma(Request $req)
  {
    try {
      $id = $req->params['id'];
      $nombre = $req->body['nombre'];
      $idioma = new Idioma($id, $nombre);
      ResponseModel::success($this->idiomaService->editIdioma($idioma));
    } catch (Exception $e) {
      ResponseModel::error($e->getMessage());
    }
  }

  public function deleteIdioma(Request $req)
  {
    try {
      $id = $req->params['id'];
      ResponseModel::success($this->idiomaService->deleteIdioma($id));
    } catch (Exception $e) {
      ResponseModel::error($e->getMessage());
    }
  }
}
