import { StrictMode } from "react";
import { createRoot } from "react-dom/client";
import Container from "./Container.jsx";
import HelloWorld from "../hello-world/HelloWorld.jsx";

createRoot(document.getElementById("root")).render(
  <StrictMode>
    <Container>
      <HelloWorld />
    </Container>
  </StrictMode>
);
