import { DataTable } from "primereact/datatable";
import { Column } from "primereact/column";

import DeleteIcon from "../assets/img/delete-icon.png";
import EditIcon from "../assets/img/edit-icon.png";
import useCategoria from "../hooks/useCategoria";

export const TableCategoria = () => {
  const { categorias, isLoadingCategoria } = useCategoria();
  // const { selectedAutor, setSelectedAutor } = useState<Editorial | null>(null);
  // const [visibleEditAutor, setVisibleEditAutor] = useState(false);
  // const [visibleAddAutor, setVisibleAddAutor] = useState(false);
  return (
    <DataTable
      style={{ background: "white", marginTop: "auto" }}
      value={categorias}
      paginator
      loading={isLoadingCategoria}
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
      <Column field="nombre" header="Subgeneros" />
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
