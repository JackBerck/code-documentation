import { redirect } from '@sveltejs/kit';

export async function handle({ event, resolve }) {
	if (event.url.pathname === '/home') {
		throw redirect(307, '/id/home');
	}

	return resolve(event);
}
