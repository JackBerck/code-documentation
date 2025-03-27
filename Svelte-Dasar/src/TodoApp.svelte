<script>
  import { fly } from "svelte/transition";
  import Todo from "./lib/Todo.svelte";
  import EditTodo from "./lib/EditTodo.svelte";

  let todos = $state([
    { id: 1, name: "Buy milk", done: false },
    { id: 2, name: "Buy bread", done: true },
    { id: 3, name: "Buy cheese", done: false },
  ]);
  let name = $state("");
  let done = $state(false);

  function add(event) {
    event.preventDefault();
    todos = [
      ...todos,
      {
        id: todos.length + 1,
        name: name,
        done: done,
      },
    ];

    name = "";
    done = false;
    event.target.reset();
  }

  function edit(id) {
    for (let todo of todos) {
      if (todo.id === id) {
        todo.edit = true;
      }
    }
  }

  function onEdit(id, name) {
    for (let todo of todos) {
      if (todo.id === id) {
        todo.name = name;
        todo.edit = false;
      }
    }
  }

  function remove(id) {
    todos = todos.filter((todo) => todo.id !== id);
  }

  $inspect(todos).with((type, values) => console.log(type, values));
</script>

{#snippet todoRow(todo)}
  <li
    in:fly={{ y: 100, duration: 500 }}
    out:fly={{ y: -100, duration: 500 }}
    onintrostart={() => console.log("On Intro Start")}
    onintroend={() => console.log("On Intro End")}
    onoutrostart={() => console.log("On Outro Start")}
    onoutroend={() => console.log("On Outro End")}
  >
    {#if todo.edit}
      <EditTodo id={todo.id} name={todo.name} onedit={onEdit} />
    {:else}
      <Todo {...todo} />
      <button onclick={() => edit(todo.id)}>Edit</button>
      <button onclick={() => remove(todo.id)}>Remove</button>
    {/if}
  </li>
{/snippet}

<h1>Todo App</h1>

<form onsubmit={add}>
  <input
    type="text"
    placeholder="Add todo"
    name="todo"
    id="todo"
    bind:value={name}
  />
  <br />
  <label for="done">Done?</label><input
    type="checkbox"
    name="done"
    id="done"
    bind:checked={done}
  />
  <br />
  <button type="submit">Add</button>
</form>

<ul>
  {#each todos as todo (todo.id)}
    {@render todoRow(todo)}
  {/each}
</ul>
