import { mount } from "svelte";
import "./app.css";
import Box from "./lib/Box.svelte";

const app = mount(Box, {
  target: document.getElementById("app"),
});

export default app;
