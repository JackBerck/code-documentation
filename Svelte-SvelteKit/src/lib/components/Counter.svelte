<script>
	let counter = $state(0);
	let { data } = $props();

    console.info(data)

	function increment() {
		counter++;
	}
</script>

<button onclick={increment}>Increment {counter}</button>
