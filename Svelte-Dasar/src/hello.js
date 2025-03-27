import { mount } from "svelte";
import "./app.css";
import HelloSvelte from "./lib/HelloSvelte.svelte";

const app = mount(HelloSvelte, {
  target: document.getElementById("app"),
});

export default app;
