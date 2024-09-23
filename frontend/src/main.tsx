import { createRoot } from 'react-dom/client'
import AppRouter from './routes/route'

createRoot(document.getElementById('root')!).render(
  <AppRouter />
)
