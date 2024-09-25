import { useEffect, useState } from "react"
import useApiFetch from "../hooks/useApiFetch"
import { Autor, Categoria, Editorial, Idioma, Subgenero } from "../types/Libro"
import useMultiplyFetch from "../hooks/useMultiplyFecth"
interface DataHerramientas{
    autores?: Autor[],
    idiomas?: Idioma[],
    categorias?: Categoria[],
    subgeneros?: Subgenero[],
    editoriales?: Editorial[]
}

export default function PageLibros(): JSX.Element {
    // const { data: autores, isLoading } = useApiFetch<Autor[]>('/autores')
    // const { data: idiomas } = useApiFetch<Idioma[]>('/idiomas')
    // const { data: categorias } = useApiFetch<Categoria[]>('/categorias')
    // const { data: subgeneros } = useApiFetch<Subgenero[]>('/subgeneros')
    // const { data: editoriales } = useApiFetch<Editorial[]>('/editoriales')
    // const [dataHerramientas, setDataHerramientas] = useState<DataHerramientas>()
    
    // useEffect(() => {
    //     if (autores && idiomas && categorias && subgeneros && editoriales) {
    //       setDataHerramientas({
    //         autores,
    //         categorias,
    //         editoriales,
    //         idiomas,
    //         subgeneros,
    //       });
    //     }
    //   }, [autores, idiomas, categorias, subgeneros, editoriales]);
    //   console.log(dataHerramientas)

    const {data} = useMultiplyFetch(['/autores', '/idiomas', '/categorias', '/subgeneros', '/editoriales'])
    return(
        <div>
            <h1>ALL LIBROS uwu</h1>
        </div>
    )
}