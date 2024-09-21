import '../assets/card.css'

interface CardProps{
    title: string
    sinopsis: string
    autor: string
    categoria: string
    subgenero: string
    idioma: string
    urlImage?: string
}

export default function Card({title, sinopsis, autor, categoria, subgenero, idioma, urlImage}: CardProps): JSX.Element {
    return (
        <div className="card">
            <div className="card-image">
                <img className="blur-image" src={urlImage} alt="Cactus imagen" />
                <img className="card-image-img" src={urlImage} alt="Cactus imagen" />
            </div>
            <div className="card-tag">
                <span className="tag-title">{categoria}</span>
                <span className="tag-title">{idioma}</span>
                <span className="tag-title">{subgenero}</span>
            </div>
            <div className="card-content">

                <h2>{title}</h2>
                <p>{sinopsis ? sinopsis : 'Próximamente...'}</p>
            </div>
            <div className="card-footer">
                <span className="author">{autor}</span>
            </div>
        </div>
    )
}