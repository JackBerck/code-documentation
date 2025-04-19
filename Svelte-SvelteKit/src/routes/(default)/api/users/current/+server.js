import { json } from '@sveltejs/kit';

export async function GET({ cookies }) {
	const user = cookies.get('user');

	if (!user) {
		return json(
			{
				user: null
			},
			{
				status: 401
			}
		);
	}

	return json(
		{
			user: user
		},
		{
			status: 200
		}
	);
}

export async function DELETE({ cookies }) {
	cookies.delete('user', {
		path: '/'
	});

	return json(
		{
			user: null
		},
		{
			status: 200
		}
	);
}
