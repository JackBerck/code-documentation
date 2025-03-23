import { StrictMode } from "react";
import { createRoot } from "react-dom/client";
import { BrowserRouter, Routes, Route } from "react-router";
import { Provider } from "react-redux";
import { configureStore } from "@reduxjs/toolkit";
import { counterSlice } from "./counterSlice.js";
import { todoListSlice } from "./todoListSlice.js";
import "./index.css";
import App from "./App.jsx";
import Counter from "./Counter.jsx";
import ListTodo from "./ListTodo.jsx";
import UpdateTodo from "./UpdateTodo.jsx";
import AddTodo from "./AddTodo.jsx";

const store = configureStore({
  reducer: {
    counter: counterSlice.reducer,
    todoList: todoListSlice.reducer,
  },
});

createRoot(document.getElementById("root")).render(
  <StrictMode>
    <Provider store={store}>
      <BrowserRouter>
        <Routes>
          <Route path="/" element={<App />} />
          <Route
            path="/counter"
            element={
              <>
                <Counter />
                <Counter />
              </>
            }
          />
          <Route path="/todolist" element={<ListTodo />} />
          <Route path="/todolist/add" element={<AddTodo />} />
          <Route path="/todolist/:id/edit" element={<UpdateTodo />} />
        </Routes>
      </BrowserRouter>
    </Provider>
  </StrictMode>
);
