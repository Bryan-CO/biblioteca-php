import { useEffect, useState } from 'react'
import Card from './components/Card'
import { Libro } from './types/Libro'
function App():JSX.Element {
  const [data, setData] = useState<Libro[]>([])
  useEffect(()=>{
    fetch('http://192.168.100.3:1234/libro')
    .then(res => res.json())
    .then(data => setData(data.data))
  }, [])
  return (
    <>
      {
        data.length > 0
        &&
        data.map((libro, index) => <Card 
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
    </>
  )
}

export default App
