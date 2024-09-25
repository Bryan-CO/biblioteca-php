import { useEffect, useState } from "react"
import LibroService from "../services/LibroService"
import { Libro } from "../types/Libro"

export default function useLibro() {
    const [data, setData] = useState<Libro[]>([])
    const [error, setError] = useState<string | null>(null)
    const [isLoading, setIsLoading] = useState(true)
    useEffect(() => {
        const fetchLibros = async () => {
            try {
                setIsLoading(true)
                const libros = await LibroService.getLibros()
                setData(libros)
                setIsLoading(false)
            } catch (error) {
                if (error instanceof Error) {
                    setError(error.message)
                }
            }
        }
        fetchLibros()
    }, [])

    return { data, error, isLoading }
}