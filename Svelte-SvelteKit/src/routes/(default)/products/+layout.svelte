<script lang="ts">
	const { children, data } = $props();
</script>

<h1>Time {data.date}</h1>
{@render children()}
