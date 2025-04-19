import { error } from '@sveltejs/kit';

export async function load({ params, fetch }) {
	const response = await fetch(`/api/products/${params.id}.json`);

	if(!response.ok) {
		error (404, {
			message: 'Product not found',
		})
	}
	
	return await response.json();
}
