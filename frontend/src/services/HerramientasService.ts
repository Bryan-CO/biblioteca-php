import { Autor } from "../types/Libro"
import { IResponse } from "../types/Reponse"

async function getAutores(){
    const res = await fetch(`${import.meta.env.VITE_API_URL}/autores`)
    const data : IResponse <Autor[]> = await res.json()
    if(!data.success){
        throw new Error(data.message ?? 'Ocurrió algo inesperado!')
    }
    return data.data
}

const HerramientasService = {
    getAutores
}
export default HerramientasService