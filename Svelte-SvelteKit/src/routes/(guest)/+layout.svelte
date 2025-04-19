<script>
	import '../../app.css';

	const { children } = $props();
</script>

<svelte:head>
	<title>Guest Layout</title>
	<meta name="description" content="This is the guest layout page." />
	<style>
		body {
			background-color: black;
			color: white;
		}
	</style>
</svelte:head>

<h1>Hi Guest</h1>

{@render children()}
