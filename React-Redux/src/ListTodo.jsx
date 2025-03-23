import { useSelector, useDispatch } from "react-redux";
import { Link } from "react-router";
import { removeTodo } from "./todoListSlice.js";

export default function ListTodo() {
  const todos = useSelector((state) => state.todoList);
  const dispatch = useDispatch();

  return (
    <div>
      <h1>Todo List</h1>
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          {todos.map((todo) => (
            <tr key={todo.id}>
              <td>{todo.id}</td>
              <td>{todo.name}</td>
              <td>
                <button onClick={() => dispatch(removeTodo({ id: todo.id }))}>
                  Remove
                </button>
                <Link to={`/todolist/${todo.id}/edit`}>Update</Link>
              </td>
            </tr>
          ))}
        </tbody>
      </table>
      <Link to="/todolist/add">Add Todo</Link>
    </div>
  );
}
