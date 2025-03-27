import { mount } from "svelte";
import "./app.css";
import Blog from "./lib/Blog.svelte";

const app = mount(Blog, {
  target: document.getElementById("app"),
});

export default app;
