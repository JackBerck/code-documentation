export async function load({ params }) {
	const lang = params.lang;

	const hello = {
		en: 'Hello',
		id: 'Halo',
		es: 'Hola',
		fr: 'Bonjour'
	};

	return {
		hello: hello[lang]
	};
}
