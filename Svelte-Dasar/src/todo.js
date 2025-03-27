import { mount } from "svelte";
import "./app.css";
import TodoApp from "./TodoApp.svelte";

const app = mount(TodoApp, {
  target: document.getElementById("app"),
});

export default app;
