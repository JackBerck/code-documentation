import { mount } from 'svelte'
import './app.css'
import Mouse from './lib/Mouse.svelte'

const app = mount(Mouse, {
  target: document.getElementById('app'),
})

export default app
