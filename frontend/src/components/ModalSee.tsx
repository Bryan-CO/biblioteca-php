import { Libro } from "../types/Libro";
import { Image } from "primereact/image";
import "../assets/formLibroSee.css";
import { InputData } from "./InputData";
import { Divider } from "primereact/divider";
import { Textarea } from "./Textarea";

export default function ModalSee({
  libro,
}: {
  libro: Libro | null;
}): JSX.Element {
  return (
    <>
      {libro && (
        <form className="form-see">
          <picture>
            <Image src={libro.urlImagen} alt="Image" height="180" preview />
          </picture>
          <InputData data={libro.serialNumber} title="Codigo" disabled />
          <InputData data={libro.nombre} title="Nombre" disabled />
          <InputData data={libro.idioma.nombre} title="Idioma" disabled />
          <InputData data={libro.editorial.nombre} title="Editorial" disabled />
          <InputData data={libro.categoria.nombre} title="Categoria" disabled />
          <InputData data={libro.subgenero.nombre} title="Subgenero" disabled />
          <InputData data={libro.autor.nombre} title="Autor" disabled />
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
