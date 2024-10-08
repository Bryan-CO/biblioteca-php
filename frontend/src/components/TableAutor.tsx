import useAutor from "../hooks/useAutor";
import { Autor } from "../types/Libro";
import { DataTable } from "primereact/datatable";
import { Column } from "primereact/column";

import DeleteIcon from "../assets/img/delete-icon.png";
import EditIcon from "../assets/img/edit-icon.png";
import { useState } from "react";

export const TableAutor = () => {
  const { autores, isLoadingAutor } = useAutor();
  // const { selectedAutor, setSelectedAutor } = useState<Autor | null>(null);
  // const [visibleEditAutor, setVisibleEditAutor] = useState(false);
  // const [visibleAddAutor, setVisibleAddAutor] = useState(false);
  return (
    <DataTable
      style={{ background: "white", marginTop: "auto", flex: "1" }}
      value={autores}
      paginator
      loading={isLoadingAutor}
      rows={5}
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
      <Column field="nombre" header="Autores" />
      <Column
        body={(body) => {
          return (
            <div style={{ display: "flex", gap: "1em" }}>
              <img
                src={EditIcon}
                style={{ cursor: "pointer" }}
                onClick={() => {
                  // setSelectedAutor(body);
                  alert("Editando");
                  // setVisibleEditAutor(true);
                }}
              />
              <img
                src={DeleteIcon}
                style={{ cursor: "pointer" }}
                onClick={() => alert("QUEIRES ELIMINAR XD?")}
              />
            </div>
          );
        }}
      />
    </DataTable>
  );
};
