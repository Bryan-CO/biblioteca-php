import { TableAutor } from "../components/TableAutor";
import { TableCategoria } from "../components/TableCategoria";
import { TableEditorial } from "../components/TableEditorial";
import { TableIdioma } from "../components/TableIdioma";
import { TableSubgenero } from "../components/TableSubgenero";

export default function PageHerramientas(): JSX.Element {
  // const [visibleEditAutor, setVisibleEditAutor] = useState(false);
  // const [visibleAddAutor, setVisibleAddAutor] = useState(false);

  return (
    <div
      className="container"
      style={{
        display: "grid",
        gridTemplateColumns: "repeat(2,1fr)",
        gap: "40px",
        width: "80%",
      }}
    >
      <h2 style={{ fontSize: "40px" }}>Herramientas</h2>
      <p></p>
      <TableAutor />
      <TableEditorial />
      <TableSubgenero />
      <TableIdioma />
      <TableCategoria />
    </div>
  );
}
