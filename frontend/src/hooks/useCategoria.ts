import { useEffect, useState } from "react";
import HerramientasService from "../services/HerramientasService";
import { Categoria } from "../types/Libro";

export default function useCategoria() {
  const [categorias, setCategorias] = useState<Categoria[]>([]);
  const [error, setError] = useState<string | null>(null);
  const [isLoadingCategoria, setIsLoading] = useState(true);
  useEffect(() => {
    const fetchCategorias = async () => {
      try {
        setIsLoading(true);
        const categorias = await HerramientasService.getCategorias();
        setCategorias(categorias);
        setIsLoading(false);
      } catch (error) {
        if (error instanceof Error) {
          setError(error.message);
        }
      }
    };
    fetchCategorias();
  }, []);

  return { categorias, error, isLoadingCategoria };
}
