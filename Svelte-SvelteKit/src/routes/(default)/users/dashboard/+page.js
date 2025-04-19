export async function load({ fetch }) {
	const response = await fetch('/api/users/current');

	if (!response.ok) {
		throw new Error(response.statusText);
	}

	const body = await response.json();

	return {
		user: body.user
	};
}
