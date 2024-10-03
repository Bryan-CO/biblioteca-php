import { useNavigate } from 'react-router-dom';
import '../assets/button.css';

interface ButtonProps {
    title: string;
    color: 'white' | 'black';
    linkTo?: string;
    onClick?: (event: React.MouseEvent<HTMLButtonElement>) => void; // Cambiado a función que acepta el evento
}

export default function Button({ title, color, linkTo, onClick }: ButtonProps): JSX.Element {
    const navigate = useNavigate();

    return (
        <button
            onClick={(event) => {
                if (linkTo) {
                    navigate(linkTo);
                } else if (onClick) { // Asegúrate de que onClick no sea undefined
                    onClick(event); // Pasa el evento al callback
                }
            }}
            className={`${"button-principal"} ${color === 'white' ? "white" : "black"}`}
        >
            {title}
        </button>
    );
}
