import { useNavigate } from 'react-router-dom'
import '../assets/button.css'
interface ButtonProps{
    title: string
    color: 'white' | 'black'
    linkTo: string
}


export default function Button({title, color, linkTo}: ButtonProps): JSX.Element{
    const navigate = useNavigate();

    return(
        <button onClick={()=>{
            navigate(linkTo)
        }} className={`${"button-principal"} ${color === 'white' ? "white" : "black"}`}>
            {title}
        </button>
    )
}