import NavBar from "../components/Navbar";
import '../assets/extraPageLibros.css';
import ManReading from '../assets/img/man-reading.webp'
import useLibro from "../hooks/useLibro";
import Card from "../components/Card";
import { useEffect, useState } from "react";
import Input from "../components/Input";

export default function PageExtranetLibros(): JSX.Element {
    const { data, isLoading } = useLibro()
    const [filterData, setFilterData] = useState(data)
    const handleChangeInput = (event: React.ChangeEvent<HTMLInputElement>) => {
        setFilterData(data.filter(val => val.nombre.includes(event.target.value.toLocaleLowerCase())))
    }

    useEffect(()=>{
        setFilterData(data)
    }, [data])
    return (
        <div style={{ minHeight: '100vh', display: 'flex', flexDirection: 'column' }}>
            <NavBar />
            <main className="extra-page-libros__container">
                <header className="banner-libros">
                    <div className="banner-text-info">
                        <h1>¡Tenemos desde
                            cuentos hasta historias
                            depresivas como mi vida!</h1>
                        <button className="banner-button">
                            Contáctenos
                        </button>
                    </div>
                    <img src={ManReading} alt="" />
                </header>
                <section className="extra-filter-libros">
                    <Input placeholder="Buscar" onChange={handleChangeInput}/>
                </section>
                <section className="extra-list-libros">
                    <div style={{ display: 'grid', gridTemplateColumns: 'repeat(auto-fill, 325px)', gridGap: '2rem', justifyContent: 'space-between'}}>
                        {
                            isLoading 
                            ?
                            <div style={{color: 'black'}}>cargando...</div>
                            :
                            filterData.map((libro, index) => <Card
                                key={index}
                                autor={libro.autor.nombre}
                                categoria={libro.categoria.nombre}
                                idioma={libro.idioma.nombre}
                                sinopsis={libro.sinopsis}
                                subgenero={libro.subgenero.nombre}
                                title={libro.nombre}
                                urlImage={libro.urlImagen}
                            />)
                        }
                    </div>
                </section>
            </main>
        </div>
    )
}