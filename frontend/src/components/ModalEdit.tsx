import { Divider } from "primereact/divider";
import { Libro, Autor } from "../types/Libro";
import { InputData } from "./InputData";
import { Textarea } from "./Textarea";
import { Combo } from "./Combo";
import useAutor from "../hooks/useAutor";

export default function ModalEdit({ libro }: { libro: Libro | null }) {
  const { autores, isLoadingAutor } = useAutor();

  const handleChangeAutor = (e) => {
    console.log(e.value);
    console.log("autores");
  };

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
          {/* <Combo title="Idioma" data={[]} item={libro.idioma} onChange={undefined} /> */}
          {/* <InputData data={libro.idioma.nombre} title="Idioma" disabled /> */}
          <InputData data={libro.editorial.nombre} title="Editorial" disabled />
          <InputData data={libro.categoria.nombre} title="Categoria" disabled />
          <InputData data={libro.subgenero.nombre} title="Subgenero" disabled />
          <Combo
            title={"Autor"}
            data={autores}
            item={libro.autor}
            onChange={handleChangeAutor}
            optionalLabel={"nombre"}
            optionalValue={"idAutor"}
          />
          {/* <InputData data={libro.autor.nombre} title="Autor" disabled /> */}
          <InputData data={libro.urlImagen} title="Portada" disabled />
          <Divider className="separator" />
          <Textarea data={libro.sinopsis} title="Sinopsis" />
          <InputData
            data={libro.cantPaginas}
            title="Cantidad de Paginas"
            disabled
          />
          <InputData
            data={libro.unidades}
            title="Cantidad de Paginas"
            disabled
          />
        </form>
      )}
    </>
  );
}
