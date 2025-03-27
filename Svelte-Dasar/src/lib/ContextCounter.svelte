<script>
  import { getContext } from "svelte";

  const counter = getContext("counter");

  function increment() {
    counter.count++;
  }
</script>

<button on:click={increment}>
  Increment {counter.count}
</button>
