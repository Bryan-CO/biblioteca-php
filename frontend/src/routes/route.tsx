import { BrowserRouter, Route, Routes } from "react-router-dom";
import Layout from "../layouts/Layout";
import PageLibros from "../pages/PageLibros";
import PageLibroDetail from "../pages/PageLibroDetail";
import PagePrincipal from "../pages/PagePrincipal";

export default function AppRouter(): JSX.Element {
    return (
        <BrowserRouter>
            <Routes>
                <Route path="/" element={<PagePrincipal />}/>
                <Route path="/intranet" element={<Layout />}>
                    <Route path="libros" element={<PageLibros />} />
                    <Route path="libros/:id" element={<PageLibroDetail />} />
                    <Route path="herramientas" element={<PageLibroDetail />} />
                </Route>
            </Routes>
        </BrowserRouter>
    )
}