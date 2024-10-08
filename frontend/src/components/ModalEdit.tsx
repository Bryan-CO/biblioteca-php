import { Divider } from "primereact/divider";
import { Libro } from "../types/Libro";
import { InputData } from "./InputData";
import { Textarea } from "./Textarea";
import useAutor from "../hooks/useAutor";

import { Combo } from "./Combo";
import useCategoria from "../hooks/useCategoria";
import useIdioma from "../hooks/useIdioma";
import useSubgenero from "../hooks/useSubgenero";
import useEditorial from "../hooks/useEditorial";

export default function ModalEdit({ libro }: { libro: Libro | null }) {
    const { autores, isLoadingAutor } = useAutor();
    const { categorias, isLoadingCategoria } = useCategoria()
    const { idiomas, isLoadingIdioma } = useIdioma()
    const { subgeneros, isLoadingSubgenero } = useSubgenero()
    const { editoriales, isLoadingEditorial } = useEditorial()

    const optionsAutores = autores.map((autor) => ({
        label: autor.nombre, // Usamos el nombre como etiqueta
        value: autor.idAutor + '', // Usamos idLibro como valor
    }));

    const optionsCategorias = categorias.map((cat) => ({
        label: cat.nombre, // Usamos el nombre como etiqueta
        value: cat.idCategoria + '', // Usamos idLibro como valor
    }));

    const optionsIdiomas = idiomas.map((idi) => ({
        label: idi.nombre, // Usamos el nombre como etiqueta
        value: idi.idIdioma + '', // Usamos idLibro como valor
    }));

    const optionsSubgeneros = subgeneros.map((sub) => ({
        label: sub.nombre, // Usamos el nombre como etiqueta
        value: sub.idSubgenero + '', // Usamos idLibro como valor
    }));

    const optionsEditoriales = editoriales.map((edi) => ({
        label: edi.nombre, // Usamos el nombre como etiqueta
        value: edi.idEditorial + '', // Usamos idLibro como valor
    }));

    return (
        <>
            {libro && (
                <form className="form-see">
                    <InputData
                        data={libro.serialNumber}
                        title="Codigo"
                        disabled={false}
                    />
                    <InputData data={libro.nombre} title="Nombre" disabled={false} />

                    <Combo data={optionsEditoriales} title="Editorial" value={libro.editorial.idEditorial + ''} isLoading={isLoadingEditorial}/>
                    <Combo data={optionsIdiomas} title="Idioma" value={libro.idioma.idIdioma + '' } isLoading={isLoadingIdioma}/>
                    <Combo data={optionsCategorias} title="Categoria" value={libro.categoria.idCategoria + ''} isLoading={isLoadingCategoria}/>
                    <Combo data={optionsSubgeneros} title="Subgenero" value={libro.subgenero.idSubgenero + ''} isLoading={isLoadingSubgenero}/>
                    <Combo data={optionsAutores} title="Autor" value={libro.autor.idAutor + ''} isLoading={isLoadingAutor}/>

                    {/* <InputData data={libro.autor.nombre} title="Autor" disabled /> */}
                    <InputData data={libro.urlImagen} title="Portada" disabled />
                    <Divider className="separator" />
                    <Textarea data={libro.sinopsis} title="Sinopsis" />
                    <InputData
                        data={libro.cantPaginas}
                        title="Cantidad de Paginas"
                        disabled={false}
                    />
                    <InputData
                        data={libro.unidades}
                        title="Unidades"
                        disabled={false}
                    />
                </form>
            )}
        </>
    );
}
