import { useState } from "react";
import { useDispatch } from "react-redux";
import { useNavigate } from "react-router";
import { addTodo } from "./todoListSlice.js";

export default function AddTodo() {
  const [name, setName] = useState("");
  const dispatch = useDispatch();
  const navigate = useNavigate();

  const handleSubmit = (e) => {
    e.preventDefault();
    dispatch(addTodo({ name: name }));
    navigate("/todolist");
  };

  return (
    <div>
      <h1>Add Todo</h1>
      <form onSubmit={handleSubmit}>
        <label>
          Name:
          <input
            type="text"
            placeholder="Enter todo list..."
            onChange={(e) => setName(e.target.value)}
          />
        </label>
        <button type="submit">Add</button>
      </form>
    </div>
  );
}
