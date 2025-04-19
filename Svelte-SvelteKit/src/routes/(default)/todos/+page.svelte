<script>
	const { data, form } = $props();
</script>

<form action="?/add" method="post">
	{#if form?.error}
		<label for="todo" style="display: inline-block;">{form?.message}</label>
	{/if}
	<input type="text" name="todo" id="todo" placeholder="Add a new todo" />
	<button type="submit">Add Todo</button>
</form>

{#each data.todos as todo}
	<p>{todo.name}</p>
	<form action="?/delete" method="post" style="display: inline-block;">
		<input type="hidden" name="id" value={todo.id} />
		<button type="submit">Delete</button>
	</form>
{/each}
