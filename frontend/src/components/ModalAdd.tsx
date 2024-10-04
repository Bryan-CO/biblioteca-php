import { InputText } from "primereact/inputtext";
import "../assets/formLibroAdd.css";

export default function ModalAdd() {
  return (
    <form action="" method="POST" id="form-add">
      <h2>Agregar Libro</h2>
      <label htmlFor="nombre">Nombre</label>
      <InputText id="name" />
    </form>
  );
}
