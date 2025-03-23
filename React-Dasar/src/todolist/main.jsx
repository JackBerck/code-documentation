import { StrictMode } from "react";
import { createRoot } from "react-dom/client";
import Container from "../container/Container";
import HelloWorld from "../hello-world/HelloWorld";
import TodoList from "./TodoList";

createRoot(document.getElementById("root")).render(
  <StrictMode>
    <Container>
      <HelloWorld />
      <TodoList />
    </Container>
  </StrictMode>
);
