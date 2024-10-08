import { useEffect, useState } from "react";
import HerramientasService from "../services/HerramientasService";
import { Subgenero } from "../types/Libro";

export default function useSubgenero() {
  const [subgeneros, setSubgeneros] = useState<Subgenero[]>([]);
  const [error, setError] = useState<string | null>(null);
  const [isLoadingSubgenero, setIsLoading] = useState(true);
  useEffect(() => {
    const fetchSubgeneros = async () => {
      try {
        setIsLoading(true);
        const subgeneros = await HerramientasService.getSubgeneros();
        setSubgeneros(subgeneros);
        setIsLoading(false);
      } catch (error) {
        if (error instanceof Error) {
          setError(error.message);
        }
      }
    };
    fetchSubgeneros();
  }, []);

  return { subgeneros, error, isLoadingSubgenero };
}
