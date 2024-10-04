import { useEffect, useState } from "react";
import { Column } from "primereact/column";
import { DataTable } from "primereact/datatable";
import useLibro from "../hooks/useLibro";
import "primereact/resources/themes/lara-light-indigo/theme.css";
import Input from "../components/Input";
import Button from "../components/Button";

import DeleteIcon from "../assets/img/delete-icon.png";
import EditIcon from "../assets/img/edit-icon.png";
import EyeIcon from "../assets/img/eye-icon.png";
import Modal from "../components/Dialog";
import ModalAdd from "../components/ModalAdd";
import ModalEdit from "../components/ModalEdit";
import ModalSee from "../components/ModalSee";
import { Libro } from "../types/Libro";

export default function PageLibros(): JSX.Element {
  const { data, isLoading } = useLibro();

  const [filterData, setFilterData] = useState(data);
  const [visibleDetailLibro, setVisibleDetailLibro] = useState(false);
  const [visibleEditLibro, setVisibleEditLibro] = useState(false);
  const [visibleAddLibro, setVisibleAddLibro] = useState(false);

  const [selectedLibro, setSelectedLibro] = useState<Libro | null>(null);

  console.log(filterData);
  const handleChangeInput = (event: React.ChangeEvent<HTMLInputElement>) => {
    setFilterData(
      data.filter((val) =>
        val.nombre
          .toLowerCase()
          .includes(event.target.value.toLocaleLowerCase())
      )
    );
  };

  useEffect(() => {
    setFilterData(data);
  }, [data]);
  return (
    <div
      style={{
        display: "flex",
        flexDirection: "column",
        height: "100%",
        gap: "1em",
      }}
    >
      <h1>Libros</h1>
      <div style={{ display: "flex", justifyContent: "space-between" }}>
        <Button
          color="black"
          title="Agregar"
          onClick={() => setVisibleAddLibro(true)}
        />
        <Input
          placeholder="Buscar"
          onChange={handleChangeInput}
          colorText="black"
        />
      </div>
      <DataTable
        style={{ background: "white", marginTop: "auto", flex: "1" }}
        value={filterData}
        paginator
        loading={isLoading}
        rows={8}
        rowsPerPageOptions={[5, 10, 25, 50]}
        tableStyle={{ minWidth: "50rem" }}
        paginatorTemplate="FirstPageLink PrevPageLink CurrentPageReport NextPageLink LastPageLink"
        currentPageReportTemplate="{first} - {last} de {totalRecords}"
        paginatorPosition="bottom"
        paginatorLeft
      >
        <Column
          header="#"
          body={(_, { rowIndex }) => (
            <div style={{ minWidth: "3em" }}>{rowIndex + 1}</div>
          )}
        />
        {/* Columna para el nombre */}
        <Column field="nombre" header="Nombre" />

        <Column
          header="Imagen"
          body={(rowData) => (
            <div
              style={{
                minHeight: "5em",
                display: "flex",
                alignItems: "center",
              }}
            >
              <img
                src={rowData.urlImagen}
                alt={rowData.nombre}
                style={{ width: "50px", height: "75px" }}
              />
            </div>
          )}
        />
        {/* Columna para el autor */}
        <Column field="autor.nombre" header="Autor" />

        {/* Columna para la editorial */}
        <Column field="editorial.nombre" header="Editorial" />

        {/* Columna para el estado */}
        <Column
          header="Estado"
          body={(rowData) => (
            <span style={{ width: "50px", height: "750px" }}>
              {rowData.estado && (
                <span
                  style={{
                    background: "#BCF6B3",
                    color: "#105352",
                    padding: "0.5em 1em",
                    borderRadius: "4PX",
                  }}
                >
                  Activo
                </span>
              )}
            </span>
          )}
        />

        {/* Columna para la imagen */}
        <Column
          header="Herramientas"
          body={(body) => {
            return (
              <div style={{ display: "flex", gap: "1em" }}>
                <img
                  src={EditIcon}
                  style={{ cursor: "pointer" }}
                  onClick={() => {
                    setSelectedLibro(body);
                    setVisibleEditLibro(true);
                  }}
                />
                <img
                  src={DeleteIcon}
                  style={{ cursor: "pointer" }}
                  onClick={() => alert("QUEIRES ELIMINAR XD?")}
                />
                <img
                  src={EyeIcon}
                  style={{ cursor: "pointer", width: "24px" }}
                  onClick={() => {
                    setSelectedLibro(body);
                    setVisibleDetailLibro(true);
                  }}
                />
              </div>
            );
          }}
        />
      </DataTable>

      <Modal
        header="Agregar Libro"
        component={<ModalAdd />}
        setVisible={setVisibleAddLibro}
        visible={visibleAddLibro}
      />
      <Modal
        header="Editar libro"
        component={<ModalEdit libro={selectedLibro} />}
        setVisible={setVisibleEditLibro}
        visible={visibleEditLibro}
      />
      <Modal
        header="Detalle libro"
        component={<ModalSee libro={selectedLibro} />}
        setVisible={setVisibleDetailLibro}
        visible={visibleDetailLibro}
      />
    </div>
  );
}
