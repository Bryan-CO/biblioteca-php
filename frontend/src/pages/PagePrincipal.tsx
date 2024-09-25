import NavBar from "../components/Navbar";
import '../assets/principal.css'
import Button from "../components/Button";
export default function PagePrincipal(): JSX.Element {
    return(
        <div style={{minHeight: '100vh', display: 'flex', flexDirection: 'column'}}>
            <NavBar />
            <main className="main-container">
                <div className="principal-detail">
                    <h1>Bienvenidos a la biblioteca</h1>
                    <p><i>"Sumérgete en el océano de los libros"</i></p>
                    <Button title="Empezar" color="white" linkTo="libros" />
                </div>
            </main>
        </div>
    )
}