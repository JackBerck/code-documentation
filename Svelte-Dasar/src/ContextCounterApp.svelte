<script>
  import { setContext } from "svelte";
  import ContextCounter from "./lib/ContextCounter.svelte";

  const counter = $state({ count: 0 });
  setContext("counter", counter);
</script>

<h1>Context Counter App</h1>
<ContextCounter />
<ContextCounter />
<ContextCounter />
