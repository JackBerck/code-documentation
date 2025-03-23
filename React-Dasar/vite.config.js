import { defineConfig } from "vite";
import react from "@vitejs/plugin-react";

// https://vite.dev/config/
export default defineConfig({
  plugins: [react()],
  build: {
    rollupOptions: {
      input: {
        index: "src/main.jsx",
        "hello-world": "src/hello-world/main.jsx",
        container: "src/container/main.jsx",
        todolist: "src/todolist/main.jsx",
        table: "src/table/main.jsx",
        events: "src/events/main.jsx",
      },
    },
  },
});
