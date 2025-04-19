import { redirect } from '@sveltejs/kit';

export async function load({ cookies, url }) {
	const user = url.searchParams.get('user');

	if (user) {
		cookies.set('user', user, {
			path: '/'
		});
	}

	if (cookies.get('user')) {
		throw redirect(302, '/users/dashboard');
	}
}
