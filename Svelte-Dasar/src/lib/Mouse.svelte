<script>
  import { onMount } from "svelte";

  let mouse = $state({
    x: 0,
    y: 0,
  });

  function handleMouseMove(event) {
    mouse.x = event.clientX;
    mouse.y = event.clientY;
  }
</script>

<svelte:body onmousemove={handleMouseMove} />
<svelte:head>
    <title>x: {mouse.x}, y: {mouse.y}</title>
</svelte:head>
<p>
  x: {mouse.x}, y: {mouse.y}
</p>
