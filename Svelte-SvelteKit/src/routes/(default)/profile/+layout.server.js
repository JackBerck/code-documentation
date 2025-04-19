import { redirect } from "@sveltejs/kit";

export function load({cookies}) {
	const user = cookies.get('user');
	
	if (!user) {
		throw redirect(302, '/users/login');
	}

	return {
		user: user
	};
}