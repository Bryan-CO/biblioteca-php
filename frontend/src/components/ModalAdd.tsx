import { Divider } from "primereact/divider";
import { InputData } from "./InputData";
import { Textarea } from "./Textarea";
import useAutor from "../hooks/useAutor";
import 'rsuite/dist/rsuite.min.css';

import { Combo } from "./Combo";
import useCategoria from "../hooks/useCategoria";
import useIdioma from "../hooks/useIdioma";
import useSubgenero from "../hooks/useSubgenero";
import useEditorial from "../hooks/useEditorial";
import { Button } from "rsuite";
import { useState } from "react";
import { Libro } from "../types/Libro";
import LibroService from "../services/LibroService";

export default function ModalAdd() {
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

  const [selectedAutor, setSelectedAutor] = useState<string | null>(null);
  const [selectedEditorial, setSelectedEditorial] = useState<string | null>(null);
  const [selectedIdioma, setSelectedIdioma] = useState<string | null>(null);
  const [selectedCategoria, setSelectedCategoria] = useState<string | null>(null);
  const [selectedSubgenero, setSelectedSubgenero] = useState<string | null>(null);


  const [nombre, setNombre] = useState<string>('');
  const [sinopsis, setSinopsis] = useState<string>('');
  const [cantPaginas, setCantPaginas] = useState<number | null>(null);
  const [unidades, setUnidades] = useState<number | null>(null);
  const [serialNumber, setSerialNumber] = useState<string>('');

  const handleSave = async() => {
    const newLibro = {
      serialNumber,
      nombre,
      sinopsis,
      idAutor: Number(selectedAutor),
      idIdioma: Number(selectedIdioma),
      idEditorial: Number(selectedEditorial),
      idCategoria: Number(selectedCategoria),
      idSubgenero: Number(selectedSubgenero),
      anio: new Date().getFullYear(), // Ajusta esto según tu lógica
      unidades: unidades || 0,
      cantPaginas: cantPaginas || 0,
      urlImagen: '' // Asigna un valor por defecto o desde un input si es necesario
    };
    await LibroService.addLibro(newLibro as Libro)
    alert('Libro agregado correctamente!!')
  };
  return (
    <>

      <form className="form-see">
        <InputData
          title="Codigo"
          disabled={false}
          onChange={(e) => setSerialNumber(e.target.value)}
        />
        <InputData title="Nombre" disabled={false}
          onChange={(e) => setNombre(e.target.value)}
         />

        <Combo 
        data={optionsEditoriales} 
        title="Editorial" 
        isLoading={isLoadingEditorial} 
        onChange={(val) => setSelectedEditorial(val)} 
      />
      <Combo 
        data={optionsIdiomas} 
        title="Idioma" 
        isLoading={isLoadingIdioma} 
        onChange={(val) => setSelectedIdioma(val)} 
      />
      <Combo 
        data={optionsCategorias} 
        title="Categoria" 
        isLoading={isLoadingCategoria} 
        onChange={(val) => setSelectedCategoria(val)} 
      />
      <Combo 
        data={optionsSubgeneros} 
        title="Subgenero" 
        isLoading={isLoadingSubgenero} 
        onChange={(val) => setSelectedSubgenero(val)} 
      />
      <Combo 
        data={optionsAutores} 
        title="Autor" 
        isLoading={isLoadingAutor} 
        onChange={(val) => setSelectedAutor(val)} 
      />

        {/* <InputData data={libro.autor.nombre} title="Autor" disabled /> */}
        <InputData title="Portada" disabled />
        <Divider className="separator" />
        <Textarea title="Sinopsis"
          onChange={(e) => setSinopsis(e.target.value)} 
        />
        <InputData
          title="Cantidad de Paginas"
          disabled={false}
          onChange={(e) => setCantPaginas(Number(e.target.value))} 
        />
        <InputData
          title="Unidades"
          disabled={false}
          onChange={(e) => setUnidades(Number(e.target.value))} 
        />

         <Button onClick={handleSave}>Guardar</Button>
      </form>
    </>
  );
}
