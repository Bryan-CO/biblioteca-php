import { useEffect, useState } from "react";
import HerramientasService from "../services/HerramientasService";
import { Idioma } from "../types/Libro";

export default function useIdioma() {
  const [idiomas, setIdiomas] = useState<Idioma[]>([]);
  const [error, setError] = useState<string | null>(null);
  const [isLoadingIdioma, setIsLoading] = useState(true);
  useEffect(() => {
    const fetchIdiomas = async () => {
      try {
        setIsLoading(true);
        const idiomas = await HerramientasService.getIdiomas();
        setIdiomas(idiomas);
        setIsLoading(false);
      } catch (error) {
        if (error instanceof Error) {
          setError(error.message);
        }
      }
    };
    fetchIdiomas();
  }, []);

  return { idiomas, error, isLoadingIdioma };
}
