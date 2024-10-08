import Logo from '../assets/img/logo.webp'
export default function Header(){
    return(
        <header style={{height: '3em', background: '#151924'}}>
            <img src={Logo} style={{width: '50px', marginLeft: '1.2em'}} />
        </header>
    )
}