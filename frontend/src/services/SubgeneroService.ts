import { Subgenero } from "../types/Libro";
import { IResponse } from "../types/Reponse";

const API_URL = "http://localhost:1234/subgeneros";

async function createSubgenero(newSubgenero: Omit<Subgenero, "idSubgenero">) {
  try {
    const response = await fetch(API_URL, {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(newSubgenero),
    });
    if (!response.ok) {
      throw new Error("Error al crear un subgenero");
    }
    const data: IResponse<Subgenero> = await response.json();
    return data;
  } catch (error) {
    console.error("Error:", error);
    throw error;
  }
}

async function updateSubgenero(updateSubgenero: Subgenero) {
  try {
    const response = await fetch(`${API_URL}/${updateSubgenero.idSubgenero}`, {
      method: "PUT",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(updateSubgenero),
    });
    if (!response.ok) {
      throw new Error("Error al actualizar el subgenero");
    }
    const data: IResponse<Subgenero> = await response.json();
    return data;
  } catch (error) {
    console.error("Error:", error);
    throw error;
  }
}

async function deleteSubgenero(idSubgenero: number) {
  try {
    const response = await fetch(`${API_URL}/${idSubgenero}`, {
      method: "DELETE",
    });
    if (!response.ok) {
      throw new Error("Error al eliminar el subgenero");
    }
  } catch (error) {
    console.error("Error:", error);
    throw error;
  }
}

const SubgeneroService = {
  createSubgenero,
  updateSubgenero,
  deleteSubgenero,
};

export default SubgeneroService;
