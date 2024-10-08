import { Editorial } from "../types/Libro";
import { IResponse } from "../types/Reponse";

const API_URL = "http://localhost:1234/editoriales";

async function createEditorial(newEditorial: Omit<Editorial, "idEditorial">) {
  try {
    const response = await fetch(API_URL, {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(newEditorial),
    });
    if (!response.ok) {
      throw new Error("Error al crear una editorial");
    }
    const data: IResponse<Editorial> = await response.json();
    return data;
  } catch (error) {
    console.error("Error:", error);
    throw error;
  }
}

async function updateEditorial(updatedEditorial: Editorial) {
  try {
    const response = await fetch(`${API_URL}/${updatedEditorial.idEditorial}`, {
      method: "PUT",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(updatedEditorial),
    });
    if (!response.ok) {
      throw new Error("Error al actualizar la editorial");
    }
    const data: IResponse<Editorial> = await response.json();
    return data;
  } catch (error) {
    console.error("Error:", error);
    throw error;
  }
}

async function deleteEditorial(idEditorial: number) {
  try {
    const response = await fetch(`${API_URL}/${idEditorial}`, {
      method: "DELETE",
    });
    if (!response.ok) {
      throw new Error("Error al eliminar la editorial");
    }
  } catch (error) {
    console.error("Error:", error);
    throw error;
  }
}

const EditorialService = {
  createEditorial,
  updateEditorial,
  deleteEditorial,
};

export default EditorialService;
