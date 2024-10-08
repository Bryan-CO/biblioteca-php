import { useEffect, useState } from "react";
import HerramientasService from "../services/HerramientasService";
import { Editorial } from "../types/Libro";

export default function useLibro() {
  const [editoriales, setEditoriales] = useState<Editorial[]>([]);
  const [error, setError] = useState<string | null>(null);
  const [isLoadingEditorial, setIsLoading] = useState(true);
  useEffect(() => {
    const fetchEditoriales = async () => {
      try {
        setIsLoading(true);
        const editoriales = await HerramientasService.getEditoriales();
        setEditoriales(editoriales);
        setIsLoading(false);
      } catch (error) {
        if (error instanceof Error) {
          setError(error.message);
        }
      }
    };
    fetchEditoriales();
  }, []);

  return { editoriales, error, isLoadingEditorial };
}
