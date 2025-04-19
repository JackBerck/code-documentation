<script lang="ts">
	import {page} from '$app/state';
	import '../../app.css';

	let { children} = $props();
</script>
<svelte:head>
	<title>My SvelteKit App</title>
	<meta name="description" content="A simple SvelteKit application" />
	<style>
		body {
			background-color: black;
			color: white;
		}
	</style>
</svelte:head>
<p>{page.url.pathname}</p>
<ul data-sveltekit-preload-data="tap">
	<li><a href="/">Home</a></li>
	<li><a href="/counter">Counter</a></li>
</ul>

{@render children()}
