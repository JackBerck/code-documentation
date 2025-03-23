import { StrictMode } from 'react'
import { createRoot } from 'react-dom/client'
import Table from './Table'

createRoot(document.getElementById('root')).render(
  <StrictMode>
    <Table />
  </StrictMode>,
)
