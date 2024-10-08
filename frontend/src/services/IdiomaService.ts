import { Idioma } from "../types/Libro";
import { IResponse } from "../types/Reponse";

const API_URL = "http://localhost:1234/idiomas";

async function createIdioma(newIdioma: Omit<Idioma, "idIdioma">) {
  try {
    const response = await fetch(API_URL, {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(newIdioma),
    });
    if (!response.ok) {
      throw new Error("Error al crear el idioma");
    }
    const data: IResponse<Idioma> = await response.json();
    return data;
  } catch (error) {
    console.error("Error:", error);
    throw error;
  }
}

async function updateIdioma(updateIdioma: Idioma) {
  try {
    const response = await fetch(`${API_URL}/${updateIdioma.idIdioma}`, {
      method: "PUT",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(updateIdioma),
    });
    if (!response.ok) {
      throw new Error("Error al actualizar el idioma");
    }
    const data: IResponse<Idioma> = await response.json();
    return data;
  } catch (error) {
    console.error("Error:", error);
    throw error;
  }
}

async function deleteIdioma(idIdioma: number) {
  try {
    const response = await fetch(`${API_URL}/${idIdioma}`, {
      method: "DELETE",
    });
    if (!response.ok) {
      throw new Error("Error al eliminar el idioma");
    }
  } catch (error) {
    console.error("Error:", error);
    throw error;
  }
}

const IdiomaService = {
  createIdioma,
  updateIdioma,
  deleteIdioma,
};

export default IdiomaService;
