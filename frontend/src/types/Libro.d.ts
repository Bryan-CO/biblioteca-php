export interface Autor{
    idAutor: number
    nombre: string
}
export interface Idioma{
    idIdioma: number
    nombre: string
}
export interface Editorial{
    idEditorial: number
    nombre: string
}
export interface Categoria{
    idCategoria: number
    nombre: string
}

export interface Subgenero{
    idSubgenero: number
    nombre: string
}

export interface Libro {
    idLibro: number
    serialNumber: string
    nombre: string
    sinopsis: string
    autor: Autor
    idioma: Idioma
    editorial: Editorial
    categoria: Categoria
    subgenero: Subgenero
    anio: number
    unidades: number
    cantPaginas: number
    urlImagen: string
    estado: boolean
}