import { useEffect, useState } from "react"
import LibroService from "../services/LibroService"
import { Libro } from "../types/Libro"

export default function useLibro() {
    const [data, setData] = useState<Libro[]>([])
    const [error, setError] = useState<string | null>(null)
    useEffect(() => {
        const fetchLibros = async () => {
            try {
                const libros = await LibroService.getLibros()
                setData(libros)
            } catch (error) {
                if (error instanceof Error) {
                    setError(error.message)
                }
            }
        }
        fetchLibros()
    }, [])

    return { data, error }
}