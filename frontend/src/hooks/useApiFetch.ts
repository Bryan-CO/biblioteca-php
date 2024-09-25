import { useEffect, useState } from "react"
import ApiService from "../services/ApiService"

export default function useApiFetch<T>(endpoint: string) {
    const [data, setData] = useState<T>()
    const [error, setError] = useState<string | null>(null)
    const [isLoading, setIsLoading] = useState(true)
    useEffect(() => {
        const fetchLibros = async () => {
            try {
                setIsLoading(true)
                const libros: T = await ApiService.getData(endpoint)
                setData(libros)
                setIsLoading(false)
            } catch (error) {
                if (error instanceof Error) {
                    setError(error.message)
                }
            }
        }
        fetchLibros()
    }, [endpoint])

    return { data, error, isLoading }
}