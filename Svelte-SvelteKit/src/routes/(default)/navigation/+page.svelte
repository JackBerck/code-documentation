<script>
	import { goto } from '$app/navigation';

	let navigation = $state('');
</script>

<h1>Navigation</h1>

<form action="">
	<input type="text" bind:value={navigation} placeholder="Enter your navigation" required />
	<button onclick={() => goto(navigation)}>Go</button>
</form>
