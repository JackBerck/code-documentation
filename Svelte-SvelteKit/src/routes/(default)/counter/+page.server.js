import { building } from '$app/environment';
import { connect } from '$lib/server/database';

if (!building) {
	connect();
}

export async function load() {
	return {};
}
