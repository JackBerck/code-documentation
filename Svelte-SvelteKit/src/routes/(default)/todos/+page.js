export async function load({ data }) {
	return {
		todos: ["From client", ...data.todos],
	};
}
