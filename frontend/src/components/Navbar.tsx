import '../assets/navbar.css'
import Logo from '../assets/img/logo.webp'
import Button from './Button'
export default function NavBar(): JSX.Element{
    return(
        <nav className="navbar">
        <a href="/">
            <img src={Logo} alt="Washington Pianos Logo xd" className="navbar-logo" />
        </a>
        <ul>
            <li><a href="#" className="link">Principal</a></li>
            <li><a href="#" className="link">Libros</a></li>
            {/* <li><a href="#" className="link" id="contactanos">
                <i className="fa-regular fa-envelope"></i>
                Contáctanos
            </a></li> */}
        </ul>
        <Button title='Intranet' color='black' linkTo='intranet' />
    </nav>
    )
}