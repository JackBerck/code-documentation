import { redirect } from '@sveltejs/kit';

export async function load({ cookies, url }) {
	const logout = url.searchParams.get('logout');

	if (!cookies.get('user')) {
		throw redirect(302, '/users/login');
	}

	if (logout) {
		cookies.delete('user', {
			path: '/'
		});
		throw redirect(302, '/users/login');
	}

	return {
		user: cookies.get('user')
	};
}
