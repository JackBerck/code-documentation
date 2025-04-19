import { fail } from "@sveltejs/kit";

let lastId = 0;
const todos = [];

export function load() {
	return {
		todos: todos
	};
}

export const actions = {
	add: async ({ request }) => {
		const data = await request.formData();
		const todo = data.get('todo');

		if (!todo || typeof todo !== 'string' || todo.trim() === '') {
			return fail(400, {
				error: true,
				message: 'Todo cannot be empty'
			});
		}

		todos.push({
			id: ++lastId,
			name: todo
		});
	},

	delete: async ({ request }) => {
		const data = await request.formData();
		const id = data.get('id');

		const index = todos.findIndex((todo) => todo.id == id);
		if (index !== -1) {
			todos.splice(index, 1);
		}

		return {
			todos: todos
		};
	}
};
