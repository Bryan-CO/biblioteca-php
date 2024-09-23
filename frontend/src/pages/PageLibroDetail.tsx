import { useParams } from "react-router-dom"

export default function PageLibroDetail(): JSX.Element {
    const { id } = useParams()
    return(
        <div>
            <h1>LIBRO DETALLE</h1>
            <p>ID DEL LIBRO: {id}</p>
        </div>
    )
}