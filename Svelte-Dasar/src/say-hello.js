import { mount } from "svelte";
import "./app.css";
import SayHello from "./lib/SayHello.svelte";

const app = mount(SayHello, {
  target: document.getElementById("app"),
});

export default app;
