import { createRoot } from 'react-dom/client'
import AppRouter from './routes/route'
import 'primeicons/primeicons.css';
import { PrimeReactProvider } from 'primereact/api';
import 'primeflex/primeflex.css';
import 'primereact/resources/primereact.css';
import 'primereact/resources/themes/lara-dark-indigo/theme.css';

createRoot(document.getElementById('root')!).render(
  <PrimeReactProvider>
    <AppRouter />
  </PrimeReactProvider>
)
