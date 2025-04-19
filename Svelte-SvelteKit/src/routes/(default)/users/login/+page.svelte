<script lang="ts">
	import { goto } from '$app/navigation';

	let user = $state('');

	async function login(e: Event) {
		e.preventDefault();

		const response = await fetch('/api/users/login', {
			method: 'POST',
			headers: {
				'Content-Type': 'application/json'
			},
			body: JSON.stringify({ user })
		});

		if (response.ok) {
			await goto('/users/dashboard');
		} else {
			alert('Login failed. Please try again.');
		}
	}
</script>

<form action="/users/login" method="get">
	<label for="user">User : </label>
	<input
		type="text"
		id="user"
		name="user"
		bind:value={user}
		placeholder="Enter your username"
		required
	/>
	<button type="submit" onclick={login}>Login</button>
</form>
