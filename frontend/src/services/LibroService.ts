import { Libro } from "../types/Libro"

interface IResponse<T>{
    success: boolean
    data: T
    message: string | null
}

async function getLibros(){
    const res = await fetch('http://192.168.100.3:1234/libros')
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