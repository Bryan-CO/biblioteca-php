import { Autor, Categoria, Editorial, Idioma, Subgenero } from "../types/Libro";
import { IResponse } from "../types/Reponse";

async function getAutores() {
  const res = await fetch(`${import.meta.env.VITE_API_URL}/autores`);
  const data: IResponse<Autor[]> = await res.json();
  if (!data.success) {
    throw new Error(data.message ?? "Ocurrió algo inesperado!");
  }
  return data.data;
}

async function getEditoriales() {
  const res = await fetch(`${import.meta.env.VITE_API_URL}/editoriales`);
  const data: IResponse<Editorial[]> = await res.json();
  if (!data.success) {
    throw new Error(data.message ?? "Ocurrió algo inesperado!");
  }
  return data.data;
}

async function getIdiomas() {
  const res = await fetch(`${import.meta.env.VITE_API_URL}/idiomas`);
  const data: IResponse<Idioma[]> = await res.json();
  if (!data.success) {
    throw new Error(data.message ?? "Ocurrió algo inesperado!");
  }
  return data.data;
}

async function getSubgeneros() {
  const res = await fetch(`${import.meta.env.VITE_API_URL}/subgeneros`);
  const data: IResponse<Subgenero[]> = await res.json();
  if (!data.success) {
    throw new Error(data.message ?? "Ocurrió algo inesperado!");
  }
  return data.data;
}

async function getCategorias() {
  const res = await fetch(`${import.meta.env.VITE_API_URL}/categorias`);
  const data: IResponse<Categoria[]> = await res.json();
  if (!data.success) {
    throw new Error(data.message ?? "Ocurrió algo inesperado!");
  }
  return data.data;
}

const HerramientasService = {
  getAutores,
  getEditoriales,
  getIdiomas,
  getSubgeneros,
  getCategorias,
};
export default HerramientasService;
