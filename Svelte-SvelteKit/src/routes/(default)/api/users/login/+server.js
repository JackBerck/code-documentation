import { json } from '@sveltejs/kit';

export async function POST({ request, cookies }) {
	const body = await request.json();

	cookies.set('user', body.user, {
		path: '/'
	});

	return json(
		{
			user: body.user
		},
		{
			status: 200
		}
	);
}
