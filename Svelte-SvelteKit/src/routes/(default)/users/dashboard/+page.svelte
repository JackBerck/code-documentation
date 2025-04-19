<script>
	import { goto } from '$app/navigation';

	const { data } = $props();

	async function logout() {
		const response = await fetch('/api/users/current', {
			method: 'DELETE',
			headers: {
				'Content-Type': 'application/json'
			}
		});

		if (response.ok) {
			await goto('/users/login');
		} else {
			alert('Logout failed. Please try again.');
		}
	}
</script>

<h1>Hello {data.user}</h1>
<p>Welcome to your dashboard!</p>

<a href="/users/dashboard" onclick={logout}>Log Out</a>