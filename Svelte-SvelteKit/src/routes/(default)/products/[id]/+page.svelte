<script>
	import { onMount } from 'svelte';
	import { invalidate } from '$app/navigation';

	const { data } = $props();

	onMount(() => {
		invalidate(`/products/${data.id}`);
	});
</script>

<a href="/products">Back to products</a>

<h1>{data.name}</h1>
<p>{data.description}</p>
<p>Price: ${data.price}</p>
