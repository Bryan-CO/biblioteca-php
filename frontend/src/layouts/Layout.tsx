import Sidebar from "./Sidebar";
import '../assets/layout.css';
import { Outlet } from "react-router-dom";

export default function Layout(): JSX.Element {
    return(
        <div style={{display: 'flex', minHeight: '100vh'}}>
            <Sidebar />
            <main style={{flex: '1', padding: '3em', background: 'blue'}}>
                <Outlet />
            </main>
        </div>
    )
}