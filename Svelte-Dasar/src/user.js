import { mount } from "svelte";
import "./app.css";
import UserApp from "./UserApp.svelte";

const app = mount(UserApp, {
  target: document.getElementById("app"),
});

export default app;
