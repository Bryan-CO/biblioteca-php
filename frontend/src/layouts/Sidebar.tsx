import 'primeflex/primeflex.css';
import 'primeicons/primeicons.css';
import 'primereact/resources/primereact.css';
import 'primereact/resources/themes/lara-light-indigo/theme.css';
import { Avatar } from 'primereact/avatar';
import { Ripple } from 'primereact/ripple';
import { NavLink } from 'react-router-dom';
export default function Sidebar():JSX.Element{

    return(
        <div className='sidebar'>
            <div id="app-sidebar-2" className="surface-section block flex-shrink-0 absolute lg:static left-0 top-0 z-1 border-right-1 surface-border select-none" style={{ width: '280px', height: '100%'}}>
                <div style={{background: '#151924', height: '100%'}} className="flex flex-column">
                    <div className="overflow-y-auto">
                        <ul className="list-none p-3 m-0">
                            <li>
                                <ul className="list-none p-0 m-0 overflow-hidden">
                                    <li>
                                        <NavLink to={'/intranet/libros'} className="sidebar-link p-ripple flex align-items-center cursor-pointer p-3 border-round text-700 hover:surface-100 transition-duration-150 transition-colors w-full">
                                            <i className="pi pi-home mr-2"></i>
                                            <span className="font-medium">Libros</span>
                                            <Ripple/>
                                        </NavLink>
                                    </li>
                                    <li>
                                        <NavLink className="sidebar-link p-ripple flex align-items-center cursor-pointer p-3 border-round text-700 hover:surface-100 transition-duration-150 transition-colors w-full" to={'/intranet/herramientas'}>
                                            <i className="pi pi-bookmark mr-2"></i>
                                            <span className="font-medium">Herramientas</span>
                                            <Ripple />
                                        </NavLink>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div className="mt-auto">
                        <hr className="mb-3 mx-3 border-top-1 border-none surface-border" />
                        <a v-ripple className="m-3 flex align-items-center cursor-pointer p-3 gap-2 border-round text-700 hover:surface-100 transition-duration-150 transition-colors p-ripple">
                            <Avatar image="https://primefaces.org/cdn/primereact/images/avatar/amyelsner.png" shape="circle" />
                            <span className="font-bold">Administrador</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    )
}