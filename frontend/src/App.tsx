import Card from './components/Card'
import useLibro from './hooks/useLibro'
function App():JSX.Element {
  const {data, error} = useLibro()
  return (
    <div style={{display: 'flex', gap: '3em', flexWrap: 'wrap'}}>
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
    </div>
  )
}

export default App
