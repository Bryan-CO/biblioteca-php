import Sidebar from "./Sidebar";
import '../assets/layout.css';
import { Outlet } from "react-router-dom";
import Header from "./Header";

export default function Layout(): JSX.Element {
    return (
        <div style={{ display: 'flex', flexDirection: 'column', minHeight: '100vh' }}>
            <Header />
            <div style={{display: 'flex', flex: '1'}}>
                <Sidebar />
                <main style={{ flex: '1', padding: '3em', background: 'white', color: 'black' }}>
                    <Outlet />
                </main>
            </div>

        </div>
    )
}