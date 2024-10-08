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

async function addLibro(libro: Libro){
    const res = await fetch('http://localhost:1234/libros', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json', // Especificamos que enviamos JSON
        },
        body: JSON.stringify(libro)
    })
    const data : IResponse <Libro> = await res.json()
    if(!data.success){
        throw new Error(data.message ?? 'Ocurrió algo inesperado!')
    }
}

const LibroService = {
    getLibros,
    addLibro
}
export default LibroService