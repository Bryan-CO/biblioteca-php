import { useEffect, useState } from "react"
import ApiService from "../services/ApiService"

export default function useMultiplyFetch<T>(endpoints: string[]) {
    const [data, setData] = useState<T>()
    const [error, setError] = useState<string | null>(null)
    const [isLoading, setIsLoading] = useState(true)
    useEffect(() => {
        const fetchLibros = async () => {
            try {
                setIsLoading(true)
                const data1: T = await Promise.all(endpoints.map(endpoint => ApiService.getData(endpoint)))
                console.log(data1)
                setData(data)
                setIsLoading(false)
            } catch (error) {
                if (error instanceof Error) {
                    setError(error.message)
                }
            }
        }
        fetchLibros()
    }, [endpoints])

    return { data, error, isLoading }
}