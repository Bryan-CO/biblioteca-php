import { useEffect, useState } from "react";
import HerramientasService from "../services/HerramientasService";
import { Autor } from "../types/Libro";

export default function useLibro() {
  const [autores, setAutores] = useState<Autor[]>([]);
  const [error, setError] = useState<string | null>(null);
  const [isLoadingAutor, setIsLoading] = useState(true);
  useEffect(() => {
    const fetchAutores = async () => {
      try {
        setIsLoading(true);
        const autores = await HerramientasService.getAutores();
        setAutores(autores);
        setIsLoading(false);
      } catch (error) {
        if (error instanceof Error) {
          setError(error.message);
        }
      }
    };
    fetchAutores();
  }, []);

  return { autores, error, isLoadingAutor };
}
