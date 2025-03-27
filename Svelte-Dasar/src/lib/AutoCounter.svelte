<script>
  let counter = $state(0);
  let interval = $state(1000);

  function increment() {
    interval += 1000;
  }

  $effect(() => {
    const id = setInterval(() => {
      counter++;
    }, interval);
    return () => clearInterval(id);
  });
</script>

<h1>{counter}</h1>
<button onclick={increment}>Increment</button>
