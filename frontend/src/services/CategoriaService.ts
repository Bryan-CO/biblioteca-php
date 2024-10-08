import { Categoria } from "../types/Libro";
import { IResponse } from "../types/Reponse";

const API_URL = "http://localhost:1234/categorias";

async function createCategoria(newCategoria: Omit<Categoria, "idCategoria">) {
  try {
    const response = await fetch(API_URL, {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(newCategoria),
    });
    if (!response.ok) {
      throw new Error("Error al crear la categoria");
    }
    const data: IResponse<Categoria> = await response.json();
    return data;
  } catch (error) {
    console.error("Error:", error);
    throw error;
  }
}

async function updateCategoria(updateCategoria: Categoria) {
  try {
    const response = await fetch(`${API_URL}/${updateCategoria.idCategoria}`, {
      method: "PUT",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(updateCategoria),
    });
    if (!response.ok) {
      throw new Error("Error al actualizar la categoria");
    }
    const data: IResponse<Categoria> = await response.json();
    return data;
  } catch (error) {
    console.error("Error:", error);
    throw error;
  }
}

async function deleteCategoria(idCategoria: number) {
  try {
    const response = await fetch(`${API_URL}/${idCategoria}`, {
      method: "DELETE",
    });
    if (!response.ok) {
      throw new Error("Error al eliminar la categoria");
    }
  } catch (error) {
    console.error("Error:", error);
    throw error;
  }
}

const CategoriaService = {
  createCategoria,
  updateCategoria,
  deleteCategoria,
};

export default CategoriaService;
