<script>
  const { id, name, done } = $$props;

  const imojis = {
    "1": "🍼",
    "2": "🍞",
    "3": "🧀",
  };

  const imoji = imojis[id];
</script>

{#if done}
  <td>{id}</td>
  <td><s>{name} - {imoji}</s></td>
  <td><input type="checkbox" checked /></td>
{:else}
  <td>{id}</td>
  <td>{name} - {imoji}</td>
  <td><input type="checkbox" /></td>
{/if}
