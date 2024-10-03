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
    ResponseModel::success($this->categoriaService->getCategorias());
  }

  public function addCategoria(Request $req)
  {
    try {
      $nombre = $req->body['nombre'];
      ResponseModel::success($this->categoriaService->addCategoria($nombre));
    } catch (Exception $e) {
      ResponseModel::error($e->getMessage());
    }
  }

  public function editCategoria(Request $req)
  {
    try {
      $id = $req->params["id"];
      $nombre = $req->body["nombre"];
      $categoria = new Categoria($id, $nombre);
      ResponseModel::success($this->categoriaService->editCategoria($categoria));
    } catch (Exception $e) {
      ResponseModel::error($e->getMessage());
    }
  }

  public function deleteCategoria(Request $req)
  {
    try {
      $id = $req->params["id"];
      $this->categoriaService->deleteCategoria($id);
      ResponseModel::success(null, 200, "ok");
    } catch (Exception $e) {
      ResponseModel::error($e->getMessage());
    }
  }
}
