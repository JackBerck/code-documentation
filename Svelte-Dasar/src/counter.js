import { mount } from "svelte";
import "./app.css";
import Counter from "./lib/Counter.svelte";

const app = mount(Counter, {
  target: document.getElementById("app"),
});

export default app;
