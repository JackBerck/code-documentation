import { HELLO } from '$env/static/private';
import { PUBLIC_HELLO, PUBLIC_NAME } from '$env/static/public';
import { connect } from '$lib/server/database';

export async function handle({ event, resolve }) {
	console.info('Receive request: ', event.url.href);

	return await resolve(event);
}
export async function init() {
	console.info('Server init');
	connect();
	console.info(PUBLIC_NAME);
	console.info(HELLO);
	console.info(PUBLIC_HELLO);
}
