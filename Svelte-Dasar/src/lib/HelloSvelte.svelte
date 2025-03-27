<script>
  import Logo from "./Logo.svelte";
  const name = "Svelte";

  console.log("Hello from Svelte!");

  const content = "<h2>HTML content</h2>";
</script>

<h1>Hello {name.toUpperCase()}</h1>
<Logo />
{@html content}

<style>
  h1 {
    color: red;
  }
</style>
