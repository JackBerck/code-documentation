import { mount } from 'svelte'
import './app.css'
import Student from './lib/Student.svelte'

const app = mount(Student, {
  target: document.getElementById('app'),
})

export default app
