import { Libro } from "../types/Libro"
import { IResponse } from "../types/Reponse"

async function getLibros(){
    const res = await fetch('http://localhost:1234/libros')
    const data : IResponse <Libro[]> = await res.json()
    if(!data.success){
        throw new Error(data.message ?? 'Ocurrió algo inesperado!')
    }
    return data.data
}

const LibroService = {
    getLibros
}
export default LibroService