import { defineConfig } from "vite";
import { svelte } from "@sveltejs/vite-plugin-svelte";

// https://vite.dev/config/
export default defineConfig({
  plugins: [svelte()],
  build: {
    rollupOptions: {
      input: {
        index: "index.html",
        hello: "hello.html",
        counter: "counter.html",
        "say-hello": "say-hello.html",
        "global-counter": "global-counter.html",
        "auto-counter": "auto-counter.html",
        user: "user.html",
        todo: "todo.html",
        article: "article.html",
        time: 'time.html',
        box: 'box.html',
        student: 'student.html',
        blog: 'blog.html',
        "context-counter": 'context-counter.html',
      },
    },
  },
});
