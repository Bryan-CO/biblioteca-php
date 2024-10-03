import { Libro } from "../types/Libro"

export default function ModalEdit({ libro }: { libro: Libro | null }) {
    console.log(libro?.editorial.idEditorial);
    return (
        <>
            {libro && (
                <h1>{libro.editorial.idEditorial}</h1>
            )}
        </>
    );
}
