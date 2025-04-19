<script lang="ts">
	import { onMount } from 'svelte';
	import { invalidateAll } from '$app/navigation';

	const { data } = $props();

	onMount(() => {
		invalidateAll();
	});
</script>

<ul>
	{#each data.products as product}
		<li><a href="/products/{product}">{product}</a></li>
	{/each}
</ul>
