import { IResponse } from "../types/Reponse"

async function getData<T>(endpoint: string){
    const res = await fetch(`${import.meta.env.VITE_API_URL}${endpoint}`)
    const data : IResponse <T> = await res.json()
    if(!data.success){
        throw new Error(data.message ?? 'Ocurrió algo inesperado!')
    }
    return data.data
}

const ApiService = {
    getData
}
export default ApiService