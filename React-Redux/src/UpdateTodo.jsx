import { useState } from "react";
import { useParams, useNavigate } from "react-router";
import { useDispatch, useSelector } from "react-redux";
import { getTodoById, updateTodo } from "./todoListSlice.js";

export default function UpdateTodo() {
  const { id } = useParams();
  const todo = useSelector((state) => getTodoById(state, Number(id)));
  const [name, setName] = useState(todo.name);
  const dispatch = useDispatch();
  const navigate = useNavigate();

  const handleSubmit = (e) => {
    e.preventDefault();
    dispatch(
      updateTodo({
        id: todo.id,
        name: name,
      })
    );
    navigate("/todolist");
  };

  return (
    <div>
      <h1>Update Todo</h1>
      <form onSubmit={handleSubmit}>
        <label>
          Name:
          <input
            type="text"
            value={name}
            onChange={(e) => setName(e.target.value)}
          />
        </label>
        <button type="submit">Update</button>
      </form>
    </div>
  );
}
