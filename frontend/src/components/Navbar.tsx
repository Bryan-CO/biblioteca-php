import '../assets/navbar.css'
import Logo from '../assets/img/logo.webp'
import Button from './Button'
import { NavLink } from 'react-router-dom'
export default function NavBar(): JSX.Element{
    return(
        <nav className="navbar">
        <a href="/">
            <img src={Logo} alt="Washington Pianos Logo xd" className="navbar-logo" />
        </a>
        <ul>
            <li><NavLink to="/" className={`link`}>Principal</NavLink></li>
            <li><NavLink to="/libros" className={`link`}>Libros</NavLink></li>
        </ul>
        <Button title='Intranet' color='black' linkTo='/intranet' />
    </nav>
    )
}