import { Editorial } from "../types/Libro";
import { DataTable } from "primereact/datatable";
import { Column } from "primereact/column";

import DeleteIcon from "../assets/img/delete-icon.png";
import EditIcon from "../assets/img/edit-icon.png";
import useEditorial from "../hooks/useEditorial";

export const TableEditorial = () => {
  const { editoriales, isLoadingEditorial } = useEditorial();
  // const { selectedAutor, setSelectedAutor } = useState<Editorial | null>(null);
  // const [visibleEditAutor, setVisibleEditAutor] = useState(false);
  // const [visibleAddAutor, setVisibleAddAutor] = useState(false);
  return (
    <DataTable
      style={{ background: "white", marginTop: "auto", flex: "1" }}
      value={editoriales}
      paginator
      loading={isLoadingEditorial}
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
      <Column field="nombre" header="Editoriales" />
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