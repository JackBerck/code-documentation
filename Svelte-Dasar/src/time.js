import { mount } from 'svelte'
import './app.css'
import Time from './lib/Time.svelte'

const app = mount(Time, {
  target: document.getElementById('app'),
})

export default app
