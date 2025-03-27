<script>
  import { counter } from "../state/counter";

  function increment() {
    $counter++;
  }
</script>

<button onclick={increment}>
  Increment {$counter}
</button>
